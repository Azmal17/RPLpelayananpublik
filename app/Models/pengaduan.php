<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;

class pengaduan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'pengaduan';

    public $incrementing = false;
    public $timestamps = true;

    public function pengaduan(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'local_key');
    }
}
