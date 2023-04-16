<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (DB::table('pesertas')->count() == 0) {

            DB::table('pesertas')->insert([

                [
                    'nama' => 'Rizky Ridho Ramadhan',
                    'email' => 'ramadhan@test.com',
                    'asal_pt' => 'Universitas Multi Data Palembang',
                    'url_foto' => 'https://simponi2.mdp.ac.id/foto/2125/2125250079.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nama' => 'Muhammad Totti Alfarabi',
                    'email' => 'alfarabi@test.com',
                    'asal_pt' => 'Universitas Multi Data Palembang',
                    'url_foto' => 'https://simponi2.mdp.ac.id/foto/2125/2125250080.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nama' => 'Muhammad alfa Rizi',
                    'email' => 'EmailMahasiswa',
                    'asal_pt' => 'Universitas Multi Data Palembang',
                    'url_foto' => 'https://simponi2.mdp.ac.id/foto/2125/2125250100.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}
