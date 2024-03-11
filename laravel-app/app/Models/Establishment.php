<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'establishment',
        'city_id',
        'code',
        'adresse',
        'tel',
        'fax',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
