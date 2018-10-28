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

        @if(count($movie->comments))
        <h4>Comments:</h4>
            <ul class="list-unstyled">
                @foreach($movie->comments as $comment)
                    <li>
                    <p>{{$comment->content}}</p>
                   <p>created at:{{$comment->created_at}}</p>
                    </li>
                @endforeach    
            </ul>
        @endif
        
         
@endsection


