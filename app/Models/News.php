<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // une news a un seul personnel
    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }
}
