<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class WhyChooseUs extends Model
{
    protected $fillable = ['title', 'description'];

    public function reasons()
    {
        return $this->hasMany(WhyChooseUsReason::class);
    }
}