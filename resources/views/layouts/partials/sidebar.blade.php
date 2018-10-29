

  <aside class="col-sm-3 ml-sm-auto blog-sidebar">
      <div class="sidebar-module sidebar-module-inset">
    <h4 class="font-italic">Movies</h4>
    <ol class="list-unstyled mb-0">
        @foreach($movies as $movie) 
      <li><a href="/movies/{{ $movie->id}}">      
        {{ $movie->title }}
        </a></li>
        @endforeach
      </ol>
  </div>
  </aside>

  