<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class rawatJalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rawatjalan')->insert([
            //'NO' => '1',
            'nama_pasien' => 'Gege',
            'no_rm' => '170902270923',
            'no_registrasi_rj' => '6689553208735',
            'no_rujukan' => '1123754379754'
        ]);
    }
}
