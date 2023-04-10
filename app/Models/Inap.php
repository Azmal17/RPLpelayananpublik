<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inap extends Model
{
    use HasFactory;
    protected $table = 'inaps';
    protected $fillable = [
        'no_registrasi',
        'no_rm',
        'nama_pasien',
        'kode_dokter',
        'nama_dokter',
        'no_kamar',
        'no_rujukan',
        'tgl_masuk',
        'tgl_keluar'
    ];
}
