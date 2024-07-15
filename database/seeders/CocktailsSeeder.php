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
            'Long Island Iced Tea',
            'Espresso Martini',
            'Negroni',
            'Rum&Ginger',
            'Wiskey Sour Cocktail',
            'Amaretto Sour',
        ];

        $texts1_en = [
            '<p>The Mojito is a world-famous cocktail made with Caribbean rum, hints of mint and lime. Pour straight from the fridge into your glass of choice over crushed ice. Garnish with mint leaves and a slice of lime. Under the palm trees or in the comfort of your living room, the Coppa Cocktails Mojito is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Piña Colada is a delicious cocktail made with white rum, vodka, uniquely rich cream, coconut and the sweet flavor of pineapple juice. Pour straight from the fridge into your glass of choice over crushed ice. Garnish with a slice of pineapple. With your feet in the sand or in the comfort of your home, the Coppa Cocktails Piña Colada is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Strawberry Daiquiri is a very fruity cocktail made with premium rum, lime juice and fresh strawberries. Pour straight from the fridge into your glass of choice over crushed ice. Optional: Garnish with a strawberry. By the pool or in your living room, the Coppa Cocktails Strawberry Daiquiri is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Sex on the Beach is widely popular. This cocktail is made with vodka, peach schnapps, orange juice and the sweet flavors of pineapple and cranberry. Pour straight from the fridge into your glass of choice over crushed ice. Garnish with a slice of orange. At the beach or on a comfy couch, the Coppa Cocktails Sex on the Beach is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Mai Tai is a legendary cocktail made with rum, orange juice and lime juice. Pour straight from the fridge into your glass of choice over ice. Garnish with a slice of lime and pineapple. At a tropical resort or on your cozy couch, the Coppa Cocktails Mai Tai is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Margarita is one of the world\'s most popular cocktails, made with tequila, liqueur, lime and natural flavors. Pour straight from the fridge into your glass of choice over crushed ice. Optional: Serve in a salt-rimmed glass with a lime slice. By the pool or in the comfort of your home, the Coppa Cocktails Margarita is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Cosmopolitan is a classic cocktail which blends premium vodka with contemporary flavors such as triple sec, cranberry juice and lime juice. Serve as cold as possible in your glass of choice. Garnish with a slice of orange or orange zest. Under the city lights or in the comfort of your home, the Coppa Cocktails Cosmopolitan is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Tequila Sunrise is an all-time classic Tequila Cocktail made with blanco tequila, a hint of rum and orange juice. Pour straight from the fridge into your glass of choice over ice. Garnish with a slice of orange. At an outdoor event or a festive brunch, the Coppa Cocktails Tequila Sunrise is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Passion Fruit Martini is a refreshing and fruity cocktail made with vanilla vodka, lime juice and passion fruit. Serve as cold as possible in your glass of choice. Optional: Garnish with a passion fruit half. On a rooftop or in your kitchen, the Coppa Cocktails Passion Fruit Martini is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>The Long Island Iced Tea is a cocktail traditionally made with vodka, rum, tequila, triple sec and gin with a hint of lime juice and the sweet flavor of cola. Pour straight from the fridge into your glass of choice over ice. Garnish with a slice of lemon. Optional: Top off with cola. At a garden party or on your porch, the Coppa Cocktails Long Island Iced Tea is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Espresso Martini is a classy cocktail made with vodka, cold brew coffee and coffee liqueur. Shake and serve as cold as possible in your glass of choice. Garnish with three coffee beans. At a festive gathering or after a lovely dinner, the Coppa Cocktails Espresso Martini is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>The Negroni is the ultimate Italian aperitif. A complex and delicious cocktail with fruity aromas and herb flavors that is easy to enjoy. Pour straight from the fridge into your glass of choice over ice. Garnish with a slice of orange. At a festive outing or to complement a dinner at home, the Coppa Cocktails Negroni is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>Rum and Ginger is a fresh and slightly stormy cocktail that is simply divine. Pour straight from the fridge into your glass of choice over ice. Garnish with a lime wedge. Optional: Top off with ginger beer. At a party or on your patio, the Coppa Cocktails Rum and Ginger is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p>The traditional Whiskey Sour is made with bourbon, syrup and lemon juice. We use the best aged three-year Kentucky straight bourbon whiskey, to achieve a perfectly balanced premium cocktail. Pour straight from the fridge into your glass of choice over ice. Garnish with an orange slice. At a grand event or around a cozy fire the Coppa Cocktails Whiskey Sour Cocktail is best enjoyed in great company.</p><p>At Coppa Cocktails we use the best natural ingredients. Sedimentation might occur, shake before use. Once opened, keep in a cool place.</p>',
            '<p></p><p></p>',
        ];

        $texts2_en = [
            '<b>Mojito\'s Story</b><p>Do you know the story behind the rise to fame of the popular Mojito cocktail? In the Cuban capital of La Havana in the 50s and 60s, the notorious author and early trend setter Ernest Hemingway spend his days enjoying cocktails in his favorite bar La Bodeguita del Medio. The Mojito was his nr 1 cocktail of choice. The rumor spread, making the Mojito sell out in the city of Havana. Today, the Mojito is still one of the most popular cocktails among cocktail lovers around the world.</p><i>"Mojito, a world-famous cocktail that brings a refreshing breeze to any celebration."</i>',
            '<b>Piña Colada\'s Story</b><p>San Juan, Puerto Rico is the birthplace of the original Piña Colada. This signature summer drink was created in 1954 by the acclaimed bartender Ramón “Monchito” Marrero from a fruity fusion of rum, pineapple juice and coconut cream. During his 30 years of residence at the Caribe Hilton he served the Piña Colada with his original recipe making it one of the most popular summer cocktails in history. The Piña Colada is now the official drink of Puerto Rico and one of Coppa Cocktails preferred cocktail treats for warm summer days.</p><i>"The Piña Colada is a signature sunshine drink that makes every celebration taste irresistibly sweet."</i>',
            '<b>Strawberry Daiquiri\'s Story</b><p>The Daiquiri was invented many years ago in a small mining town in Santiago de Cuba as a refreshing cure for the tropical heat. Fast forward to the start of the 1990s and the cocktail renaissance where the new interest in tiki drinks catapulted the Strawberry Daquiri to the world stage. Thirsty cocktail lovers fell in love with this fresh, fruity, and delicious drink, making the Strawberry Daiquiri cocktail a staple in both beach venues and penthouse bars around the world.</p><i>"Coppa Cocktails Strawberry Daiquiri brings you a delicious taste of summer. Just twist the cap and serve on ice!"</i>',
            '<b>Sex on the Beach\'s Story</b><p>The Sex on the Beach cocktail was first created in Florida in the 80s and got its suggestive name from the happy party goers that frequented the area and its beaches while on Spring Break Holiday. The sweet and fruity flavor notes paired with a cheeky and infamous cocktail name, makes the Sex on the Beach the perfect refreshing holiday drink. Get your friends, bring some ice and share a Coppa Cocktails Sex on the Beach for that sweet taste of summer. Sunshine sipping just got real’ easy.</p><i>"The Coppa cocktails Sex on the Beach is an iconic summer refresher.</i>',
            '<b>Mai Tai\'s Story</b><p>The story of the Mai Tai dates back to the 1940s and its creator Vic Bergeron, the owner of a tiki restaurant. According to the legend, Vic prepared a cocktail for his Tahitian friends, who tasted it and in return exclaimed “Maitai’i roa a’e” meaning “Out of this world”. Bergeron went on to name his new cocktail “Mai Tai”, the Tahitian word for “The Best”. The Coppa Cocktails Mai Tai is indeed a delicious cocktail treat and a great reminder to cherish friends and celebrate life together.</p><i>"This Mai Tai is a delicious tropical cocktail inspired by the warm tiki culture and its people."</i>',
            '<b>Margarita\'s Story</b><p>The story behind the famous Margarita cocktail has different versions, both filled with color, and set in Mexico. In the 1930 a Mexican restaurant owner is said to first have mixed this dreamy drink to impress a showgirl, that frequented the bar. Other sources say that the Margarita was first mixed by a Mexican socialite by the name of Margaret, aka Margarita, at a house party in Mexico during the late 1940\'s. One thing we know for sure is that this delicious drink has become any cocktail lovers\' first choice when wanting to spark celebration.</p><i>"The margarita is an instant party starter, perfect for any sizzling summer day or spontaneous get-together."</i>',
            '<b>Cosmopolitan\'s Story</b><p>The origin of the classic Cosmopolitan cocktail is often disputed. In popular opinion, the modern-day Cosmo was created by Toby Cecchini at the Manhattan bar, The Oden, in 1987. By blending citron flavored vodka, liqueur, cranberry juice and fresh lime juice, the contemporary cosmopolitan was born. With the famous TV show Sex and the City, the Cosmo later achieved iconic cocktail status, becoming a top cocktail choice for any girl\'s night out. To sip in style, make sure to try the Coppa Cocktails Cosmopolitan, a most have for any big celebration.</p><i>"Make a sophisticated statement with the istagrammable Coppa Cocktails Cosmopolitan."</i>',
            '<b>Tequila Sunrise\'s Story</b><p>The Tequila Sunrise originates from Sausito, California in the early 1970’s and is, as its name implies, famously known for resembling an everlasting sunrise through its vibrant cocktail colors. A disco favorite with a party reputation unlike many of its contemporary cocktails, the Tequila sunrise has always been a festive choice in times of celebration. This is the drink of choice for rock stars and party people, brunch and music lovers. The Coppa Cocktails Tequila Sunrise is a true star of both the daytime and nighttime party scene.</p><i>"This fruity cocktail favorite, with roots in the rock\'n roll scene, has likely seen more sunrises than most of our Coppa Cocktails."</i>',
            '<b>Passion Fruit Martini\'s Story</b><p>The Passion Fruit Martini was created in England in the early 2000s by a notorious bartender at a famous London bar. The bartender wanted to create an evocative and tantalizing taste experience. Blending vodka and premium ingredients, The Passion Fruit Martini was born. This deliciously irresistible cocktail has traveled to bars across the world to now find its new home in the ready-to-drink Coppa Cocktails family. Flirty and chic, the stylish Passion Fruit Martini has reached iconic status among cocktail lovers around the world.</p><i>"The irresistible Coppa Cocktails Passion Fruit Martini brings you passion, sophisticated sips and all-night celebrations."</i>',
            '<b>Long Island Iced Tea\'s Story</b><p>There are various stories as to the creation of the famous Long Island Iced Tea cocktail. One popular tale is set during the 1900’s prohibition period. Old man Bishop, a liquor distiller from Long Island Tennesy, is said to be the inventor of this delicious prohibition-era drink. With a clever name, meant to divert suspicion, this cheeky cocktail quickly gain popularity among early cocktail drinkers and gutsy partygoers. With a sweet punchy kick, the Coppa Cocktails Long Island Iced Tea becomes the perfect drink for any daytime celebration.</p><i>"If you enjoy a refreshing cocktail with a subtle punch, sweet cues and fresh citric notes, Coppa Cocktails Long Island Iced Tea is your natural cocktail of choice."</i>',
            '<b>Espresso Martini\'s Story</b><p>The story of the Espresso Martini is almost as rich as the cocktail itself. This popular cocktail was invented by Dick Bradsell back in the 1990’s. Originally called the “Vodka Espresso” after a supermodel asked for a cocktail with coffee in it, the Contemporary espresso Martini has found its way to dinner parties and brunch gatherings across the globe. Try the Coppa Cocktails Espresso Martini for the perfect after dinner drink with a great kick. Created with vodka, coffee, liqueur and natural flavors, this Espresso Martini sure lives up to its endearing promise of another great night, celebrating life, love, and friends.</p><i>"If you are a coffee-lover looking for that perfect after dinner pick me up, Coppa Cocktails Espresso martini is your natural cocktail of choice."</i>',
            '<b>Negroni\'s Story</b><p>Originated in Italy, the mix of vermouth, gin and bitter liqueur paved the way for the contemporary Negroni. This iconic cocktail classic was first mixed in 1919 in the beautiful Tuscan capital of Florence. By adding gin instead of soda water, Negroni suddenly got that irresistible flavor punch, popular among cocktail lovers worldwide. With time, the Negroni proved to be a cocktail trend worth keeping. With flavor notes of cherry, wine, citrus and bitter, the traditional Negroni still triggers our senses, making it a welcome addition to our Coppa Cocktails family.</p><i>"Coppa Cocktails Negroni is the ultimate Italian aperitif to start the evening, sophisticated, bold and irresistibly delicious."</i>',
            '<b>Rum & Ginger\'s Story</b><p>The Rum and Ginger is a refreshing spin on the tropical cocktail favorite, Dark and Stormy, and brings an exciting flavor kick to any happy drinking occasion. The blending of rich rum and spicy ginger transports us to the Caribbean where this flavor combination was popularized. Served in your glass of choice over lots of ice, the Coppa Cocktails Rum and Ginger becomes a new favorite for festive get-togethers. Perfect for backyard BBQs, spontaneous dinners and lazy summer days, the Rum and Ginger is a cocktail treat worth trying.</p><i>"Kick-start the party with a delicious and slightly stormy Rum and Ginger."</i>',
            '<b>Whiskey Sour Cocktail\'s Story</b><p>In the 1700 and 1800’s the Whiskey Sour was a popular drink among sailors, earning the cocktail its well-appointed nick name “the best a man could drink”. After decades out at sea the sailors brought their version of the famous Whiskey Sour cocktail to shore where it gained enough popularity to be included in the notorious ‘Bartenders Guide’ by Jerry Thomas. Indulge your cocktail curiosity with our Coppa cocktails Whiskey sour cocktail, an easy to sip, jet sophisticated tribute to the sailors that paved the way for the modern travelers and cocktail lovers of today.</p><i>"A bold, refreshing, and iconic whiskey-based cocktail, loved by both sailors and jetsetters."</i>',
            '<b>Amaretto Sour\'s Story</b><p>Amaretto is Italian for “a little bitter” - a perfect flavor description of the balance between the delicious sweetness and the bitterness of the nutty almond notes. The origin of the Amaretto, like many of its contemporary cocktails, is enigmatic. From the great Italian stories two different families appear, claiming the title of the Inventors of Amaretto. Cocktail origins aside, the Coppa Cocktails Amaretto Sour is a delightful treat for any cocktail curious person, ready to live that Italian dream of Tuscan fields and fresh picked seasonal fruit</p><i>"Get swept off your feet by the delicious flavor combinations of almonds, bitters, and sweet liquor in this modern Amaretto Sour."</i>',
        ];

        $texts3_en = [
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Rum, Natural Flavors and Certified Color.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Vodka, Rum and Natural Flavors.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Rum, Natural Flavors and Certified Colors.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Vodka, Natural Flavors and Certified Color.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Rum, Natural Flavors, Caramel Color, and Certified Color FD&C Yellow #5.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 14,9%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Tequila, Liqueur and Natural Flavors.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Vodka, Natural Flavors and Certified Color.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Tequila, Rum, Natural and Artificial Flavors and Certified Colors.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Vodka, Natural Flavors and Certified Colors.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Vodka, Rum, Tequila, and Natural Flavors.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 14,9%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Vodka, Natural Flavors and Caramel Color.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 14,9%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Vodka and Natural Flavors.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 10%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Rum, Natural Flavors, Caramel Color and FD&C Yellow #5.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 13%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Straight Bourbon Whiskey, Natural Flavors and Caramel Color.</p>',
            '<p class="lh-1"><strong>Product details</strong></p><p class="lh-1">ABV: 14,9%</p><p class="lh-1"><strong>Made With</strong></p><p class="lh-1">Cane Neutral Spirits with Natural Flavors and Artificial and Certified Colors.</p>',
        ];

        $links = [
            'mojito',
            'pina-colada',
            'strawberry-daiquiri',
            'sex-on-the-beach',
            'mai-tai',
            'margarita',
            'cosmopolitan',
            'tequila-sunrise',
            'passion-fruit-martini',
            'long-island-iced-tea',
            'espresso-martini',
            'negroni',
            'rum-and-ginger',
            'whiskey-sour-cocktail',
            'amaretto-sour',
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
