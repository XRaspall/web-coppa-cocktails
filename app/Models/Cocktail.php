<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;
    protected $table = 'cocktails';

    protected $fillable = [
        'name',
        'text1_en',
        'text1_de',
        'text1_us',
        'imgroute',
        'alt',
        'text2_en',
        'text2_de',
        'text2_us',
        'text3_en',
        'text3_de',
        'text3_us',
        'video',
        'link',
    ];

    public function images()
    {
        return $this->hasMany(CocktailImage::class);
    }
}
