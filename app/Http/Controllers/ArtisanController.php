<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function clearCache()
    {
        $output = "";
        Artisan::call('route:clear');
        $output .= Artisan::output();

        Artisan::call('cache:clear');
        $output .=  Artisan::output();

        Artisan::call('config:clear');
        $output .=  Artisan::output();

        Artisan::call('view:clear');
        $output .=  Artisan::output();

        return $output.Artisan::output();
    }
}