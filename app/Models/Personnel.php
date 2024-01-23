<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $dates = ['date_naissance'];

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'date_naissance',
        'adresse',
        'ville',
        'code_postal',
        'telephone',
        'poste',
    ];

    // un personnel a

}
