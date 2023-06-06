<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodimalinda extends Model
{
    use HasFactory;
    protected $table = 'prodimalindas';
    protected $fillable = [
        'kode_prodi',
        'nama_prodi'
    ];
}
