<?php

namespace App\Http\Controllers;

use App\RoomModel;
use App\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $rooms = RoomModel::findOrfail($id);
        return view('user.sewa', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transaksi()
    {
        $sewa = Sewa::all();
        return view('user.transaksi', compact('sewa'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'nama_hewan' => 'required',
            'jenis' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
        ]);

        // If the validation passes, create the Sewa record
        $tes = Sewa::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'nama_hewan' => $request->nama_hewan,
            'jenis' => $request->jenis,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);
        RoomModel::findOrFail($request->room_id)->update([
            'status'=> 'Tidak Tersedia'
        ]);

        return redirect()->route('user.transaksi')->with('success', 'Berhasil Menambahkan Transksi');

    }

    public function confirmasi($id)
    {
        Sewa::whereId($id)->update([
            'status' => 'menunggu konfirmasi'
        ]);
        return redirect()->route('user.transaksi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
