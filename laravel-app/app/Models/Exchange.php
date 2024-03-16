<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exchange extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'city_id',
        'employee_id',
        'valide',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
