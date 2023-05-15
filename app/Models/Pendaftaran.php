<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pendaftaran(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'owner_key');
    }
}
