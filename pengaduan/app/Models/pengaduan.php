<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'pengaduan';

    public $incrementing = false;
    public $timestamps = true;
}