<?php

namespace App\Http\Controllers;

use App\Interfaces\CocktailRepositoryInterface;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    private CocktailRepositoryInterface $cocktailRepository;

    public function __construct( CocktailRepositoryInterface $cocktailRepository)
    {
        $this->cocktailRepository = $cocktailRepository;
    }
    public function home(){
        return view('home');
    }

    public function contact(){
        $details = [
            'image' => 'img/contact/details.webp',
            'title' => 'Company Details',
            'text' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +31 (0) 88 990 7000</h6>
            ',
            'text1' => 'HOME',
            'link1' => '/',
            'text2' => 'OUR COCKTAILS',
            'link2' => '/our-cocktails',
        ];

        return view('contact', compact('details'));
    }

    public function ourCocktails(){
        $details = [
            'image' => 'img/ourcocktails/details.webp',
            'title' => 'Thirsty for more?',
            'text' => '
                <p>Explore buying options on our store locator or join the Coppa Cocktails community and get in touch with us!</p>
            ',
            'text1' => 'FIND A STORE',
            'link1' => '/',
            'text2' => 'CONTACT US',
            'link2' => '/contacto',
        ];

        return view('ourcocktails', compact('details'));
    }

    public function cocktail($url){
        $cocktail = $this->cocktailRepository->findByUrlWithRelations($url,['images']);

        return view('cocktail',compact('cocktail'));
    }

}
