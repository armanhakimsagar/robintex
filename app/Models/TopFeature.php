<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopFeature extends Model
{
    protected $fillable = ['icon', 'title', 'short_description', 'long_description'];
    public $timestamps = false;
}
