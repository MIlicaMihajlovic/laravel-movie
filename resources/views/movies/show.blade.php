@extends('layouts.master')
        
@section('title')
    Movies
@endsection
        
   
   
@section('content')    
    <h1>Movies</h1>
        
        <h2>{{ $movie->title }}</h2>
            {{ $movie->genre }}

            {{ $movie->director }}

            {{ $movie->year }}
           

        <p>{{ $movie->storyline }}</p>
        
         
@endsection


