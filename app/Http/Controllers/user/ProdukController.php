<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Order;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        //menampilkan data produk yang dijoin dengan table kategori
        //kemudian dikasih paginasi 9 data per halaman nya
        $kat = Categories::join('products', 'products.categories_id', '=', 'categories.id')
            ->select(DB::raw('count(products.categories_id) as jumlah, categories.*'))
            ->groupBy('categories.id')
            ->get();

        return view('user.produk', [
            'produks' => Product::paginate(9),
            'categories' => $kat
        ]);
    }
    public function detail($id)
    {
        $product = Product::find($id);

        if ($product) {
            // Check if the stock is already 0
            if ($product->stock === 0) {
                return redirect()->route('transaction.index')->with('info', 'Stock produk ' . $product->name . ' telah habis.');
            }

            // if ($product->stock <= 0) {
            //     return redirect()->route('user.produk.detail', ['id' => $product->id])->with('info', 'Stock produk ' . $product->name . ' tidak cukup.');
            // }       
           
            if ($product->stock === 0) {
                // Set a flag in the product model
                $product->is_stock_empty = true;
            }
            
    
            // Save the changes to the product
            $product->save();
    
            }
        //mengambil detail produk
        return view('user.produkdetail', [
            'produk' => Product::findOrFail($id),
            'category' => Product::where('id', $id)->first()
        ]);
    }

    public function cari(Request $request)
    {
        //mencari produk yang dicari user
        $prod  = Product::where('name', 'like', '%' . $request->cari . '%')->paginate(9);
        // $total = Product::where('name', 'like', '%' . $request->cari . '%')->count();

        return view('user.cariproduk', [
            'produks' => $prod,
            'cari' => $request->cari,
            'total' => $prod->total()
        ]);
    }
}
