<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhsgg extends Model
{
    use HasFactory;
    protected $table = 'mhsggs';
    protected $fillable = [
        'nim',
        'nama_mhs',
        'tgl_lahir',
        'jk',
        'prodi',
        'agama',
        'nik',
        'telp',
        'alamat'
    ];
}
