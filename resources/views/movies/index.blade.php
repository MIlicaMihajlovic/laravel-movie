@extends('layouts.master')
        
@section('title')
    Movies
@endsection
        
   
   
@section('content')    
    <h1>Movies</h1>
    <ul>
        <li>
        @foreach($movies as $movie) 
        <h2>
        <a href="/movies/{{ $movie->id}}">      
        {{ $movie->title }}
        </a> 
        </h2>   

        <p>{{ $movie->storyline }}</p>
        
        @endforeach
        </li>
    </ul>   
@endsection



