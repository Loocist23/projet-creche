<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // un menu fait partie d'une journee enfant
    public function journeeEnfant()
    {
        return $this->belongsTo(JourneeEnfant::class);
    }
}
