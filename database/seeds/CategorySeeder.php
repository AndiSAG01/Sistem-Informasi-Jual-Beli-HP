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
                'name' => 'Iphone',
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
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }

    }
}
