<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class rawatjalan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rawatJalan(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'owner_key', 'foreign_key');
    }

    public function rjinap(): BelongsToMany
    {
        return $this->belongsToMany(inap::class, 'foreign_key', 'owner_key');
    }
}
