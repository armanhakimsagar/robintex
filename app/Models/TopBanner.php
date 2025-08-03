<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopBanner extends Model
{
    protected $fillable = ['key', 'value'];
    public $timestamps = true;

    public static function getValue($key)
    {
        return optional(self::where('key', $key)->first())->value;
    }
}
