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
            'image' => 'img/details/details.webp',
            'title_en' => 'Company Details',
            'title_de' => 'Firmendetails',
            'title_en-us' => 'Company Details',
            'text_en' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +34 938 148 000</h6>
            ',
            'text_de' => '
                <h6>Coppa Cocktails Firma</h6>
                <h6>Amsterdam - Die Niederlande</h6>
                <h6>Handelskammer: 77582586</h6>
                <h6>Telefonnummer: +34 938 148 000</h6>
            ',
            'text_en-us' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +34 938 148 000</h6>
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
            'image' => 'img/details/details.webp',
            'title_en' => 'Company Details',
            'title_de' => 'Firmendetails',
            'title_en-us' => 'Company Details',
            'text_en' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +34 938 148 000</h6>
            ',
            'text_de' => '
                <h6>Coppa Cocktails Firma</h6>
                <h6>Amsterdam - Die Niederlande</h6>
                <h6>Handelskammer: 77582586</h6>
                <h6>Telefonnummer: +34 938 148 000</h6>
            ',
            'text_en-us' => '
                <h6>Coppa Cocktails Company</h6>
                <h6>Amsterdam - The Netherlands</h6>
                <h6>Chamber of Commerce: 77582586</h6>
                <h6>Telephone number: +34 938 148 000</h6>
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
            'image' => 'img/details/details.webp',
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
            'text1_en' => 'CONTACT US',
            'text1_de' => 'KONTAKT',
            'text1_en-us' => 'CONTACT US',
            'link1' => '/contact-coppa-cocktails',
        ];

        $cocktails = $this->cocktailRepository->all();

        return view('ourcocktails', compact('cocktails','details'));
    }

    public function cocktail($url){
        $cocktail = $this->cocktailRepository->findByUrlWithRelations($url,['images']);
        $cocktails = $this->cocktailRepository->all();

        return view('cocktail',compact('cocktail','cocktails'));
    }

    public function aboutus(){

        $details = [
            'image' => 'img/details/details.webp',
            'title_en' => 'Thirsty for more?',
            'title_de' => 'Lust auf mehr?',
            'title_en-us' => 'Thirsty for more?',
            'text_en' => '
                <p>Have a look at our complete range of delicious cocktails or explore buying options on our store locator.</p>
            ',
            'text_de' => '
                <p>Entdecke die Einkaufsmöglichkeiten in unserem Shop Locator oder werde Mitglied der Coppa Cocktails Community und nimm Kontakt mit uns auf.</p>
            ',
            'text_en-us' => '
                <p>Have a look at our complete range of delicious cocktails or explore buying options on our store locator.</p>
            ',
            'text1_en' => 'EXPLORE COCKTAILS',
            'text1_de' => 'COCKTAILS ENTDECKEN',
            'text1_en-us' => 'EXPLORE COCKTAILS',
            'link1' => '/our-cocktails',

        ];

        return view('aboutus',compact('details'));
    }

    // LEGAL

    public function privacity(){
        $details = [
            'image' => 'img/contact/details.webp',
            'title_en' => 'What\'s on your mind?',
            'title_de' => 'Was hast du im Kopf?',
            'title_en-us' => 'What\'s on your mind?',
            'text_en' => '
                <p>We would love to hear from you. Send us your questions and we’ll get back to you shortly.</p>
            ',
            'text_de' => '
                <p>Wir würden uns freuen, von Ihnen zu hören. Senden Sie uns Ihre Fragen und wir werden uns in Kürze bei Ihnen melden.</p>
            ',
            'text_en-us' => '
                <p>We would love to hear from you. Send us your questions and we’ll get back to you shortly.</p>
            ',
            'text1_en' => 'GET IN TOUCH',
            'text1_de' => 'IN KONTAKT KOMMEN',
            'text1_en-us' => 'GET IN TOUCH',
            'link1' => '/contact-coppa-cocktails',
            'text2_en' => 'HOME',
            'text2_de' => 'HEIM',
            'text2_en-us' => 'HOME',
            'link2' => '/',
        ];

        $header_subtitle = __('legal.privacity.header_subtitle');
        $header_title = __('legal.privacity.header_title');
        $legalTitle = __('legal.privacity.title');
        $legalText = __('legal.privacity.text');

        return view('legal.legal', compact('details','header_subtitle','header_title','legalTitle','legalText'));
    }
    public function websiteterms(){
        $details = [
            'image' => 'img/contact/details.webp',
            'title_en' => 'What\'s on your mind?',
            'title_de' => 'Was hast du im Kopf?',
            'title_en-us' => 'What\'s on your mind?',
            'text_en' => '
                <p>We would love to hear from you. Send us your questions and we’ll get back to you shortly.</p>
            ',
            'text_de' => '
                <p>Wir würden uns freuen, von Ihnen zu hören. Senden Sie uns Ihre Fragen und wir werden uns in Kürze bei Ihnen melden.</p>
            ',
            'text_en-us' => '
                <p>We would love to hear from you. Send us your questions and we’ll get back to you shortly.</p>
            ',
            'text1_en' => 'GET IN TOUCH',
            'text1_de' => 'IN KONTAKT KOMMEN',
            'text1_en-us' => 'GET IN TOUCH',
            'link1' => '/contact-coppa-cocktails',
            'text2_en' => 'HOME',
            'text2_de' => 'HEIM',
            'text2_en-us' => 'HOME',
            'link2' => '/',
        ];

        $header_subtitle = __('legal.websiteterms.header_subtitle');
        $header_title = __('legal.websiteterms.header_title');
        $legalTitle = __('legal.websiteterms.title');
        $legalText = __('legal.websiteterms.text');

        return view('legal.legal', compact('details','header_subtitle','header_title','legalTitle','legalText'));
    }

    public function generalterms()
    {
        $details = [
            'image' => 'img/contact/details.webp',
            'title_en' => 'What\'s on your mind?',
            'title_de' => 'Was hast du im Kopf?',
            'title_en-us' => 'What\'s on your mind?',
            'text_en' => '
                <p>We would love to hear from you. Send us your questions and we’ll get back to you shortly.</p>
            ',
            'text_de' => '
                <p>Wir würden uns freuen, von Ihnen zu hören. Senden Sie uns Ihre Fragen und wir werden uns in Kürze bei Ihnen melden.</p>
            ',
            'text_en-us' => '
                <p>We would love to hear from you. Send us your questions and we’ll get back to you shortly.</p>
            ',
            'text1_en' => 'GET IN TOUCH',
            'text1_de' => 'IN KONTAKT KOMMEN',
            'text1_en-us' => 'GET IN TOUCH',
            'link1' => '/contact-coppa-cocktails',
            'text2_en' => 'HOME',
            'text2_de' => 'HEIM',
            'text2_en-us' => 'HOME',
            'link2' => '/',
        ];

        $header_subtitle = __('legal.generalterms.header_subtitle');
        $header_title = __('legal.generalterms.header_title');
        $legalTitle = __('legal.generalterms.title');
        $legalText = __('legal.generalterms.text');

        return view('legal.legal', compact('details', 'header_subtitle', 'header_title', 'legalTitle', 'legalText'));
    }

    public function infoGlobal(){
        return view('infoglobal');

    }
}
