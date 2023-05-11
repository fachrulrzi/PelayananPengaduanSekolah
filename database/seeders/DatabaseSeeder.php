<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Aspirasi;
use App\Models\Kategori;
use App\Models\Input_Aspirasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Siswa::create([
            'nis' => '20208926',
            'kelas' => 'XII TEL 10'
        ]);
        Siswa::create([
            'nis' => '20202023',
            'kelas' => 'XII TEL 11'
        ]);
        Kategori::create([
            'ket_kategori' => 'Keamanan'
        ]);
        Kategori::create([
            'ket_kategori' => 'Kebersihan'
        ]);
        Kategori::create([
            'ket_kategori' => 'Fasilitas'
        ]);
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}