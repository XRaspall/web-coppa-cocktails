<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocktailImage extends Model
{
    use HasFactory;

    protected $table = 'cocktail_images';

    protected $fillable = [
        'imgroute',
        'alt',
        'cocktail_id',
    ];

    public function cocktail()
    {
        return $this->belongsTo(Cocktail::class,'cocktail_id');
    }
}
