<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('menu')->insertOrIgnore([
            [
                'id' => 1,
                'kode_menu' => 'BRG0001',
                'nama_menu' => 'Aqua Gelas',
                'kategori_menu' => 'Minuman',
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 2,
                'kode_menu' => 'BRG0002',
                'nama_menu' => 'Baju',
                'kategori_menu' => 'Pakaian',
                'harga' => '50000',
                'jumlah' => 2
            ]
        ]);
    }
}
