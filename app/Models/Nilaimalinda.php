<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nilaimalinda extends Model
{
    use HasFactory;
    protected $table = 'nilaimalindas';
    protected $fillable = [
        'namamhs',
        'kategori',
        'skor'
    ];
    public static function Join() {
        $data = DB::table('nilaimalindas')
            ->join('mahasiswamalindas', 'nilaimalindas.namamhs', 'mahasiswamalindas.id') 
            ->join('matakuliahmalindas', 'nilaimalindas.kategori', 'matakuliahmalindas.id')
            ->select('nilaimalindas.*', 'mahasiswamalindas.nama', 'matakuliahmalindas.nama_mk')
            ->get();
        return $data;
    }
}
