<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($movieId)
    {
        $movie = Movie::findOrFail($movieId); //ako ne nadje movie da izbaci gresku
            
    
        $this->validate(  //validacija podtaka prima dva parametra request i asoc niz
            request(),      //prekidamo odmah da ne stigne do baze
            Comment::VALIDATION_RULES
        );

        $movie->comments()->create( //sa zagradama mozemo da radimo CRUD kod commentsa
            request()->all()
        ); 

        return redirect("/movies/{$movieId}"); //moraju biti dvostruki navodnici
    }
}
