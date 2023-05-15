<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function rawatJalan(): HasMany
    {
        return $this->hasMany(rawatjalan::class, 'foreign_key', 'owner_key');
    }

    public function pengaduan(): HasMany
    {
        return $this->hasMany(pengaduan::class, 'local_key');
    }

    public function pendaftaran(): HasMany
    {
        return $this->hasMany(Pendaftaran::class, 'local_key');
    }

}