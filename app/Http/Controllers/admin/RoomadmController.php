<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\RoomModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomadmController extends Controller
{

    public function index()
    {
        $room = RoomModel::all();
        return view('admin.Room.index', compact('room'));
    }


    public function create()
    {
        return view('admin.Room.create',);
    }


    public function store(RoomRequest $request)
    {

        $data = new RoomModel([
            'gambar' => $request->input('gambar'),
            'nama_ruangan' => $request->input('nama_ruangan'),
            'fasilitas' => $request->input('fasilitas'),
            'harga_sewa' => $request->input('harga_sewa'),
            'status' => $request->input('status')
        ]);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('public/imageProduct');
        }

        $data->gambar = $imagePath;
        $data->save();

        return redirect()->route('admin.room')->with('success', 'Berhasil Menambah Ruangan Baru');


    }


    public function edit($id)
    {
        $room = RoomModel::FindOrFail($id);
        return view('admin.Room.update', compact('room'));

    }


    public function update(RoomModel $id , RoomRequest $request)
    {
        $room = $id;

         // Menghapus file gambar lama jika ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            Storage::delete($room->gambar);
        }
        // $prod = Product::find($id);
        if($request->hasFile('gambar')){
            $imagePath = $request->file('gambar')->store('public/imageProduct');
            $room->gambar = $imagePath;
            $room->update();
        }
        $room->nama_ruangan = $request->nama_ruangan;
        $room->harga_sewa = $request->harga_sewa;
        $room->status = $request->status;
        $room->fasilitas = $request->fasilitas;

        $room->update();

        return redirect()->route('admin.room')->with('success','Berhasil Mengubah Ruangan');

    }


    public function delete( RoomModel $id)
    {
        Storage::delete('imageproducts/' . $id->gambar);
        $id->delete();

        return redirect()->route('admin.room')->with('success', 'Berhasil Menghapus Ruangan');
    }
}
