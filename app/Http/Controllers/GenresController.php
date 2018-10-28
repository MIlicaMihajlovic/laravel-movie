<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::where('genre', $genre)->get(); //ovde nam iz baze uzima samo filmove tog zanra

        
        return view('movies.index', ['movies' => $movies]);
    }
}
