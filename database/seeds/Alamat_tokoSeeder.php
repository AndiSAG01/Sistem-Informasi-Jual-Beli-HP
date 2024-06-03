<?php

use App\Alamat_toko;
use Illuminate\Database\Seeder;

class Alamat_tokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name_store' => 'Maahir Store Jambi',
            'description' => 'Selamat datang di Maahir Store Jambi, destinasi terbaik Anda untuk mendapatkan handphone second berkualitas dengan harga yang terjangkau. Kami memahami bahwa memiliki handphone canggih tidak harus selalu mahal. Oleh karena itu, kami hadir untuk menyediakan berbagai pilihan handphone second yang masih dalam kondisi prima dan siap digunakan.',
            'telp' => '+6281297925686',
            'city_id' => 156,
            'detail' => 'Jambi, Indonesia'
        ];


        Alamat_toko::insert($data);
    }
}
