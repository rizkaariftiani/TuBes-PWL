<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/shop-homepage.css" rel="stylesheet">
  <link href="/css/shop-item.css" rel="stylesheet">

</head>

<body>

  @yield('header')
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">KULINERAN KUYY</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            @can('user-display')
            <a class="nav-link" href="{{ url('./home') }}">Home</a>
            @endcan
          </li>
          <li class="nav-item">
            @can('user-display')
            <a class="nav-link" href="{{ url('./about') }}">About</a>
            @endcan
          </li>
          <li>
            @can('user-display')
            <a class="nav-link" href="{{ url('./home/cetak_pdf') }}">Print Article</a>
            @endcan
          </li>
          <li class="nav-item dropdown">
            @can('manage-articles')
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('./manage') }}">Manage Article</a>
              <a class="dropdown-item" href="{{ url('./manageuser') }}">Manage User</a>
            </div>
            @endcan
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif

          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
@yield('content')

<!-- Footer -->
<footer class="py-5 bg-info">
  <div class="container">
    <p class="m-0 text-center text-dark">Copyright &copy; Our Website 2020</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
