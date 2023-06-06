<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dafa_Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'dafa_mahasiswas';
    protected $guarded = [];
    protected $primaryKey = 'id_mahasiswa';}
