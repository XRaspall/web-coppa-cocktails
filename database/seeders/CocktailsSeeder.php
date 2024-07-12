<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use App\Models\CocktailImage;
use Illuminate\Database\Seeder;

class CocktailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $names = [
            'Mojito',
            'Piña Colada',
            'Strawberry Daiquiri',
            'Sex On The Beach',
            'Mai Tai',
            'Margarita',
            'Cosmopolitan',
            'Tequila Sunrise',
            'Passion Fruit Martini',
            'LIIT',
            'Espresso Martini',
            'Negroni',
            'Rum&Ginger',
            'Wiskey Sour Cocktail',
            'Amaretto Sour',
        ];

        $texts1_en = [
            '<p>The Mojito is a world-famous cocktail made with Caribbean rum, hints of mint and lime. Pour straight from the fridge into your glass of choice over crushed ice. Garnish with mint leaves and a slice of lime. Under the palm trees or in the comfort of your living room, the Coppa Cocktails Mojito is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
            '<p></p><p></p>',
        ];

        $texts2_en = [
            '<b>Mojito\'s Story</b><p>Do you know the story behind the rise to fame of the popular Mojito cocktail? In the Cuban capital of La Havana in the 50s and 60s, the notorious author and early trend setter Ernest Hemingway spend his days enjoying cocktails in his favorite bar La Bodeguita del Medio. The Mojito was his nr 1 cocktail of choice. The rumor spread, making the Mojito sell out in the city of Havana. Today, the Mojito is still one of the most popular cocktails among cocktail lovers around the world.</p><i>"Mojito, a world-famous cocktail that brings a refreshing breeze to any celebration."</i>',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];

        $texts3_en = [
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Rum, Natural Flavors and Certified Color.</p>',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];

        $links = [
            'mojito',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        ];


        for ($i = 0; $i < count($names); $i++) {
            $cocktail = Cocktail::create([
                'name' => $names[$i],
                'text1_en' => $texts1_en[$i],
                'imgroute' => 'storage/cocktails/' . $i + 1 . '/cocktail.png',
                'alt' => $names[$i],
                'text2_en' => $texts2_en[$i],
                'text3_en' => $texts3_en[$i],
                'video' => 'storage/cocktails/' . $i + 1 . '/cocktail.mp4',
                'link' => $links[$i],
            ]);

            for ($j = 1; $j <= 6; $j++) {
                CocktailImage::create([
                    'imgroute' => 'storage/cocktails/' . $i + 1 . '/images/image' . $j . '.webp',
                    'alt' => $names[$i] . ' Imagen ' . $j,
                    'cocktail_id' => $cocktail->id,
                ]);
            }
        }
    }
}
