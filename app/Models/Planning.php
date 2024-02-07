<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;

    protected $fillable = [
        '8H-10h',
        '10H-12h',
        '12H-14h',
        '14H-16h',
        '16H-18h',
        'date'
    ];

}
