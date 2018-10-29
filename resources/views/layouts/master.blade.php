<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>

  <body>

    <div class="container">

      
      <header class="blog-header py-3">
        @include('layouts.partials.header')
      </header>

      <main role="main" class="container">
          
      <div class="row">
        <div class="col-md-8 blog-main">
          @yield('content')
        

        </div><!-- /.blog-main -->

        

      </div><!-- /.row -->

    </main><!-- /.container -->

    </div>

    <footer class="blog-footer">
      @include('layouts.partials.footer')
    </footer>