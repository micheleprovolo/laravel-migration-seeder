<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class fumettiController extends Controller
{
    public function getComics() {

        $comics = Comic::all();
        // dd($comics);

        return view ('pages.fumetti', compact('comics'));

    }

}
