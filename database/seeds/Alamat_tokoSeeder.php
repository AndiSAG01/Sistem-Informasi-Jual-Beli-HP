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
            'name_store' => 'CV Amar Abadi',
            'description' => 'Toko ATK CV Amar Abdi adalah destinasi utama untuk kebutuhan alat tulis kantor (ATK) berkualitas dan beragam. Dengan komitmen kepada layanan pelanggan yang unggul dan produk-produk berkualitas, kami menjadi pilihan utama bagi pelanggan yang menginginkan pengalaman belanja yang memuaskan.',
            'telp' => '+6285265659186',
            'city_id' => 156,
            'detail' => 'Jambi, Indonesia'
        ];


        Alamat_toko::insert($data);
    }
}
