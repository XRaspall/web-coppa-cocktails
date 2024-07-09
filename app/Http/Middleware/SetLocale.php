<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Closure;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if(session()->has('locale'))
            app()->setLocale(session('locale'));
        else
            app()->setLocale(config('app.locale'));

        return $next($request);
    }
}
