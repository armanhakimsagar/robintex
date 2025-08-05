<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Future.php
class Future extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'short_description', 'long_description', 'image', 'counts'];

    protected $casts = [
        'counts' => 'array',
    ];
}
