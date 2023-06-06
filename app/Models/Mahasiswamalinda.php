<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswamalinda extends Model
{
    use HasFactory;
    protected $table = 'mahasiswamalindas';
    protected $fillable = [
        'nama',
        'nim',
        'jenis_kelamin',
        'agama',
        'nik',
        'telepon',
        'alamat',
        'namaprodi',
    ];
    public static function Join() {
        $data = DB::table('mahasiswamalindas')
            ->join('prodimalindas', 'mahasiswamalindas.namaprodi', 'prodimalindas.id')
            ->select('mahasiswamalindas.*', 'prodimalindas.nama_prodi')
            ->get();
        return $data;
    }
}

