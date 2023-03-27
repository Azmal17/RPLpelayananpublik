<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB;

class rawatjalanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rawatjalans')->insert([
            'norm'=> '12',
            'noregistrasi'=> '1000',
            'norujukan' => '12345',
            'namapasien' => 'James Nugroho'
        ]);
    }
}
