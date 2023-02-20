<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $sections = config("comics.sections");
        $socials = config("comics.socials");
        $menu = config("comics.menu");
        $footcard = config('comics.foothead');
        return view("sections.home", compact("comics", "sections", "socials", "menu", "footcard"));
    }

    public function single($id)
    {
        $comics = Comic::all();
        $singleCard = Comic::find($id);
        $sections = config("comics.sections");
        $socials = config("comics.socials");
        $menu = config("comics.menu");
        $footcard = config('comics.foothead');

        return view("sections.singlecard", compact("comics", "singleCard", "sections", "socials", "menu", "footcard"));
    }
}
