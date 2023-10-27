<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use HasFactory;


    // un enfants a un seul owner
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
