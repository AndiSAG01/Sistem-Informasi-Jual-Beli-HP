<?php

use App\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Categories::class, 10)->create();
        $categories = [
            [
                'name' => 'Apple',
            ],
            [
                'name' => 'Samsung',
            ],
            [
                'name' => 'Xiaomi',
            ],
            [
                'name' => 'Oppo',
            ],
            [
                'name' => 'Vivo',
            ],
            [
                'name' => 'Realme',
            ],
            [
                'name' => 'Huawei',
            ],
            [
                'name' => 'OnePlus',
            ],
            [
                'name' => 'Sony',
            ],
            [
                'name' => 'LG',
            ],
            [
                'name' => 'Nokia',
            ],
            [
                'name' => 'Google Pixel',
            ],
            [
                'name' => 'Asus',
            ],
            [
                'name' => 'Motorola',
            ],
            [
                'name' => 'Lenovo',
            ],
            // Tambahkan kategori lainnya
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }

    }
}
