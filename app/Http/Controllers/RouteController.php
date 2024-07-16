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
        $cocktails = $this->cocktailRepository->all();

        $details = [
            'image' => 'img/contact/details.webp',
            'title_en' => 'Company Details',
            'title_de' => 'Firmendetails',
            'title_en-us' => 'Company Details',
            'text_en' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +31 (0) 88 990 7000</h6>
            ',
            'text_de' => '
                <h6>Coppa Cocktails Firma</h6>
                <h6>Amsterdam - Die Niederlande</h6>
                <h6>Handelskammer: 77582586</h6>
                <h6>Telefonnummer: +31 (0) 88 990 7000</h6>
            ',
            'text_en-us' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +31 (0) 88 990 7000</h6>
            ',
            'text1_en' => 'HOME',
            'text1_de' => 'HEIM',
            'text1_en-us' => 'HOME',
            'link1' => '/',
            'text2_en' => 'OUR COCKTAILS',
            'text2_de' => 'UNSERE COCKTAILS',
            'text2_en-us' => 'OUR COCKTAILS',
            'link2' => '/our-cocktails',
        ];

        return view('home', compact('details','cocktails'));
    }

    public function contact(){
        $details = [
            'image' => 'img/contact/details.webp',
            'title_en' => 'Company Details',
            'title_de' => 'Firmendetails',
            'title_en-us' => 'Company Details',
            'text_en' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +31 (0) 88 990 7000</h6>
            ',
            'text_de' => '
                <h6>Coppa Cocktails Firma</h6>
                <h6>Amsterdam - Die Niederlande</h6>
                <h6>Handelskammer: 77582586</h6>
                <h6>Telefonnummer: +31 (0) 88 990 7000</h6>
            ',
            'text_en-us' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +31 (0) 88 990 7000</h6>
            ',
            'text1_en' => 'HOME',
            'text1_de' => 'HEIM',
            'text1_en-us' => 'HOME',
            'link1' => '/',
            'text2_en' => 'OUR COCKTAILS',
            'text2_de' => 'UNSERE COCKTAILS',
            'text2_en-us' => 'OUR COCKTAILS',
            'link2' => '/our-cocktails',
        ];

        return view('contact', compact('details'));
    }


    public function ourCocktails(){
        $details = [
            'image' => 'img/ourcocktails/details.webp',
            'title_en' => 'Thirsty for more?',
            'title_de' => 'Lust auf mehr?',
            'title_en-us' => 'Thirsty for more?',
            'text_en' => '
                <p>Explore buying options on our store locator or join the Coppa Cocktails community and get in touch with us!</p>
            ',
            'text_de' => '
                <p>Entdecke die Einkaufsmöglichkeiten in unserem Shop Locator oder werde Mitglied der Coppa Cocktails Community und nimm Kontakt mit uns auf.</p>
            ',
            'text_en-us' => '
                <p>Explore buying options on our store locator or join the Coppa Cocktails community and get in touch with us!</p>
            ',
            'text1_en' => 'FIND A STORE',
            'text1_de' => 'EIN GESCHÄFT FINDEN',
            'text1_en-us' => 'FIND A STORE',
            'link1' => '/',
            'text2_en' => 'CONTACT US',
            'text2_de' => 'KONTAKT',
            'text2_en-us' => 'CONTACT US',
            'link2' => '/contacto',
        ];

        $cocktails = $this->cocktailRepository->all();

        return view('ourcocktails', compact('cocktails','details'));
    }

    public function cocktail($url){
        $cocktail = $this->cocktailRepository->findByUrlWithRelations($url,['images']);
        $cocktails = $this->cocktailRepository->all();

        return view('cocktail',compact('cocktail','cocktails'));
    }

}
