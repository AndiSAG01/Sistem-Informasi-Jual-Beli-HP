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
                'name' => 'Pensil dan Pulpen',
            ],
            [
                'name' => 'Kertas',
            ],
            [
                'name' => 'Peralatan Tulis',
            ],
            [
                'name' => 'Perlengkapan Meja'
            ],
            [
                'name' => 'Klip dan Penjepit'
            ],
            [
                'name' => 'Tinta dan Kerektor'
            ],
            [
                'name' => 'Peralatan Kreatif'
            ],
            [
                'name' => 'Perlengkapan Kantor'
            ],
            [
                'name' => 'Aksesoris'
            ],
            [
                'name' => 'Perlengkapan Teknologi'
            ],
            // Tambahkan kategori lainnya
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }

    }
}
