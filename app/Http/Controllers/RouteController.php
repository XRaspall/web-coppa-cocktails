<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
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

}
