<?php
// app/Models/Goal.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'icon', 'title', 'short_description', 'long_description'
    ];
}
