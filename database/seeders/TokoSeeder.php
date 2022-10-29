<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokos')->insert([
            [
                'nama_toko' => 'sembako berkah',
                'alamat_toko' => 'rogojampi',
            ],
            [
                'nama_toko' => 'genteng jaya',
                'alamat_toko' => 'genteng',
            ]
        ]);
    }
}
