<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'no_rm',
        'no_asuransi',
        'nama_pasien',
        'umur',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_pasien',
        'gol_darah',
        'no_telp',
        'email',
        'agama',
        'status_kawin',
    ];
}
