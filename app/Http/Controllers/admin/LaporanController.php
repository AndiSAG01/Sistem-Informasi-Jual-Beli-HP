<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        return view('admin.laporan', [
        'data' => Order::join('status_order', 'status_order.id', '=', 'order.status_order_id')
        ->join('users', 'users.id', '=', 'order.user_id')
        ->select('order.*', 'status_order.name', 'users.name as nama_pemesan')
        ->latest()->get(),
   ] );
    }
    public function produk()
    {

        $produk = Product::latest()->get();
        return view('admin.laporanproduk', compact('produk'));
    }
}
