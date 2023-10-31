<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table = 'room';

    protected $fillable = ['gambar', 'nama_ruangan', 'fasilitas', 'harga_sewa','status'];
}
