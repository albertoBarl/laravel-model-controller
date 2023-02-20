<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $cards = config("comics.cards");
    $sections = config("comics.sections");
    $socials = config("comics.socials");
    $menu = config("comics.menu");
    $footcard = config('comics.foothead');

    return view('sections.home', compact("cards", "footcard", "sections", "socials", "menu"));
})->name("home");

// route fot single card page
Route::get('/cardPage/{id}', function ($id) {
    $cards = config('comics.cards');
    $footcard = config('comics.foothead');
    $sections = config("comics.sections");
    $socials = config("comics.socials");
    $menu = config("comics.menu");


    $singleCard = '';
    foreach ($cards as $key => $card) {
        if ($key == $id) {
            $singleCard = $card;
        }
    }
    return view('sections.singlecard', compact('singleCard', 'footcard', "sections", "socials", "menu"));
})->name('cardPage');
