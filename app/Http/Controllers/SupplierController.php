<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('admin.suppliers.index', compact("supplier"));
    }

    public function store(Request $request)
   {
       
       $validatedData = $request->validate([
        'name' => 'required|string|max:100',
                'name_item' => 'required|string|max:100',
                'no_telp' => 'required|string|max:20'
       ]);

       Supplier::create($validatedData);
       

       return redirect()->route('admin.supplier')->with('success', 'Data Supplier Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.suppliers.edit', compact('supplier'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'name_item' => 'required|string|max:100',
            'no_telp' => 'required|string|max:20'
        ]);
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());
        return redirect()->route('admin.supplier')->with('success','Data Supplier Berhasil Di Ubah');
    }
    public function delete($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('admin.supplier')->with('danger','Data Supplier Berhasil Di Hapus');
    }
}
