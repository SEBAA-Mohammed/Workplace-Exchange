<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'photo',
        'grade',
        'date_naissance',
        'date_recrutement',
        'poste',
        'tel',
        'email',
        'password',
        'occupation_id',
        'establishment_id',
    ];
}
