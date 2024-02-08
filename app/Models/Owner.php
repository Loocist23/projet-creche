<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'email', 'birthdate', 'address', 'city', 'zip_code', 'user_id'];

    // un owner a plusieurs enfants et un seul compte (users)
    public function enfants()
    {
        return $this->hasMany(Enfant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
