<?php

use App\Alamat;
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'code' => '001',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ],

            [
                'name' => 'user',
                'code' => 'USR.001',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                'role' => 'customer'

            ],

            [
                'name' => 'pemilik',
                'code' => 'PML.001',
                'email' => 'pemilik@example.com',
                'password' => bcrypt('password'),
                'role' => 'pemilik'

            ]
        ];
        User::insert($data);

        factory(
            App\User::class,
            10
        )->create();
    }
}
