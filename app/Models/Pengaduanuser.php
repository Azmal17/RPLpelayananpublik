<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduanuser extends Model
{
    use HasFactory;
    protected $table = 'pengaduanusers';
    protected $fillable = [
        'nama_pengadu',
        'email',
        'no_hp',
        'tgl_kunjungan',
        'isi',
        'bagian',
        'status',
    ];
}
