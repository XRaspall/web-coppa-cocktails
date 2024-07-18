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
        'text1_en-us',
        'imgroute',
        'alt',
        'text2_en',
        'text2_de',
        'text2_en-us',
        'text3_en',
        'text3_de',
        'text3_en-us',
        'video',
        'link',
        'originalImage',
        'appear1',
        'appear2',
        'appear3',
        'appear4',
        'category_en',
        'category_de',
        'category_en-us',
        'imgSlideCocktail',
        'textSlideCocktail_en',
        'textSlideCocktail_de',
        'textSlideCocktail_en-us',
    ];

    public function images()
    {
        return $this->hasMany(CocktailImage::class);
    }
}
