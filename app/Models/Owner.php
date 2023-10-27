<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    // un owner a plusieurs enfants et un seul compte (user)
    public function enfants()
    {
        return $this->hasMany(Enfant::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
