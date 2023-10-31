<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $table ='sewa';

    protected $fillable = [
        'nama',
        'no_hp',
        'status',
        'alamat',
        'nama_hewan',
        'jenis',
        'tanggal_masuk',
        'tanggal_keluar',
        'tanggal_selesai'
    ];

}
