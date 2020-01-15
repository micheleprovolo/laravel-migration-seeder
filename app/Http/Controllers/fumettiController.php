<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class fumettiController extends Controller
{
    public function getFumetti() {

        $fumetti = Comic::all();

        return view ('pages.fumetti', compact('fumetti'));

    }

}
