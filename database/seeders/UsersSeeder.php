<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'ikhsan',
                'npm' => '123456',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'is_admin' => True,
                'image' => 'https://img.icons8.com/color/48/000000/administrator-male-skin-type-7.png',
            ]

        );

        DB::table('registers')->insert(
            [
                'nama' => 'Mudhaffar',
                'npm' => '1908107010013',
                'email' => 'daffa@gmail.com',
                'nohp' => '081212121212',
                'jurusan' => 'Informatika',
                'mataKuliah' => 'Basis Data',
                'status' => True,
            ]
        );
    }
}
