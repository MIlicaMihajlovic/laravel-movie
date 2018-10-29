@extends('layouts.master')
        
@section('title')
    Movies
@endsection
        
   
   
@section('content')  


    <div class="row">
        <div class="col-md-8 blog-main">
    <h1>Movies</h1>
    <ul class="list-unstyled">
        @foreach($movies as $movie) 
            <li>
                <div class="blog-post">
                    <h2 class="blog-post-title">
                        <a href="/movies/{{ $movie->id}}">      
                        {{ $movie->title }}
                        </a> 
                    </h2>   

                        <p>{{ $movie->storyline }}</p>
            
                </div>    
            </li>
        @endforeach
    </ul> 
</div>
    <aside class="col-md-4 blog-sidebar ad-right">
        @include('layouts.partials.sidebar')
      </aside><!-- /.blog-sidebar -->
        
    </div>

@endsection



