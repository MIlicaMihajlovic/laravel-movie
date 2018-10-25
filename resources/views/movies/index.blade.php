<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        

        <title>Movies</title>
   
    </head>
    <body>
        <h1>Movies</h1>
        <ul>
            <li>
            @foreach($movies as $movie) 
            <a href="/movies/{{ $movie->title}}">      
               <h2>{{ $movie->title }}</h2>
            </a>    

               <p>{{ $movie->storyline }}</p>
            
            @endforeach
            </li>
        </ul>   

    </body>
</html>
