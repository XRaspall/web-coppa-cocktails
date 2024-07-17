<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RouteController::class, 'home'])->name('home');
Route::get('/about-coppa-cocktails', [RouteController::class, 'aboutus'])->name('aboutusPage');
Route::get('/contacto', [RouteController::class, 'contact'])->name('contactPage');
Route::get('/our-cocktails', [RouteController::class, 'ourCocktails'])->name('ourCocktailsPage');
Route::get('/cocktails/{url}', [RouteController::class, 'cocktail']);



// LANG ROUTES

Route::get('/lang/{key}', function ($key) {
    session()->put('locale', $key);
    return redirect()->back();
});
