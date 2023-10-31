<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Sewa;
use Illuminate\Http\Request;

class PenginapanadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sewa = Sewa::get();
        return view('admin.penginapan.index', compact('sewa'));
    }

    public function confirmation($id)
    {
        $sewa = Sewa::whereId($id)->first()->sewa->id;
        Sewa::whereId($sewa)->update([
            'status' => 'Tidak Tersedia'
        ]);
        Sewa::where('id',$id)->update([
           'status' => 'telah di sewa'
        ]);

        return redirect()->back()->with(
            ['message' => 'Sudah Terkonfirmasi','alert-type' => 'success']
        );
    }

    public function end($id)
    {

    $sewa = Sewa::whereId($id)->first()->sewa->id;
    Sewa::whereId($sewa)->update([
        'status' => 'Tersedia'
    ]);
        Sewa::whereId($id)->update([
            'status' => 'selesai',
            'tanggal_keluar' => now(),
        ]);

        return back()->with(['message' => 'Transaksi Selesai 👍','alert-type'=> 'success'] );
    }

public function reject($id)
{
    Sewa::where('id',$id)->update([
        'status' => 'sewa anda di tolak'
     ]);
     return redirect()->back()->with(
         ['message' => 'Sudah Terkonfirmasi','alert-type' => 'success']
     );    }

     public function delete ($id)
     {
        Sewa::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Transaksi Penginapan');

     }
}


