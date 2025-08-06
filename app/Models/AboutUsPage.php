<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    protected $fillable = [
        'description',
        'banner_one',
        'banner_two',
        'banner_three',
    ];
}
