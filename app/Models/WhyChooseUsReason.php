<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class WhyChooseUsReason extends Model
{
    protected $fillable = ['why_choose_us_id', 'title', 'short_description', 'long_description', 'icon'];

    public function whyChooseUs()
    {
        return $this->belongsTo(WhyChooseUs::class);
    }
}