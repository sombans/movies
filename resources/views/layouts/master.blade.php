<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MOVIES</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
   
   <title>@yield('title')</title>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/movies">Srbija Filmovi</a>
  {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  --}}

  
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/movies"> Movies <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/add"> Add move </a>
      </li>
      {{--  <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>  --}}
    </div>

</aside>
</nav>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 movie-main">

            <div class="movies">
                  @yield('content')
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
    </div>
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
       
    </div>
</aside>


    </div><!-- /.row -->

</body>
</html>