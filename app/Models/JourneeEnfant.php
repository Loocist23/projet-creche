<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourneeEnfant extends Model
{
    use HasFactory;

    // une journee enfant a un seul enfant, plusieurs personnel, un menu, un planning
    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
    public function personnel()
    {
        return $this->hasMany(Personnel::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function planning()
    {
        return $this->belongsTo(Planning::class);
    }
}
