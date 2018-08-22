<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>e-RT PI Krishna</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!-- <script type="text/javascript">
      $(document).ready(function(){
        $('#navigasi ul li').click(function(e) {
          e.preventDefault();
          $('li').removeClass('active');
          $(this).addClass('active');
        });
      });
    </script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
    tinymce.init({
      selector: '#WYSIWYG'
    });
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-dark">
            <div class="container">
                <a class="navbar-brand card-header border-success text-white bg-dark" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    e-RT/RW 12/13 Mekarsari. Cimanggis. Depok.
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class=" text-light nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="material-icons" style="font-size:12pt;">person</i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('home')}}">
                                      <i class="material-icons" style="font-size: 12pt">home</i>
                                       Home
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                      <i class="material-icons" style="font-size:12pt;">exit_to_app</i>
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

        <nav class="navbar navbar-expand-md navbar-dark bg-success">
          <div role="navigation "class="container">

              <div class="col">
                <span class="navbar-text">
                  Navigasi
                  <span class="material-icons" style="font-size:12pt;">navigate_next</span>
                  <span class="material-icons" style="font-size:12pt;">navigate_next</span>
                  <span class="material-icons" style="font-size:12pt;">navigate_next</span>
                  <!-- &ensp; -->
                </span>
              </div>
              <div id="navigasi" class="col-md-auto">

                <ul class="nav nav-pills nav-justify">
                  <li class="nav-item">
                    <a class="nav-link text-light bg-success {{ Request::is('berita*') ? 'border' : '' }}" href="{{url('/berita')}}"> Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light bg-success {{ Request::is('surat*') ? 'border' : '' }}" href="{{url('/surat')}}"> Pelayanan Surat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light bg-success {{ Request::is('keuangan*') ? 'border' : '' }}" href="{{url('/keuangan')}}"> Laporan Keuangan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light bg-success {{ Request::is('galeri*') ? 'border' : '' }}" href="{{url('/galeri')}}"> Galeri</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light bg-success {{ Request::is('forum*') ? 'border' : '' }}" href="{{url('/forum')}}"> Forum</a>
                  </li>

                </ul>
              </div>
              <div class="col">

              </div>


          </div>
        </nav>

        <main class="py-4">
          <div class="container">

          <div class="row justify-content-center">
            <!-- <div class="col-md-auto" style="margin-left:0; padding-left:0">
              <div class="card border-primary">

                <h5 class="card-header bg-dark border-light text-light">Site Navigator</h5>

                <div class="card-body bg-dark">
                  <ul class="text-dark">
                    <li><a href="{{url('/')}}"> Welcome</a>
                    <li><a href="{{url('/berita')}}"> Berita</a>
                    <li><a href="{{url('/')}}"> Pelayanan Surat</a>
                    <li><a href="{{url('/')}}"> Laporan Keuangan</a>
                    <li><a href="{{url('/')}}"> Galeri</a>
                    <li><a href="{{url('/forum')}}"> Forum</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->

            <div class="col-md-10">
              @yield('content')
            </div>
          </div>

        </div>
        </main>
    </div>
</body>
</html>
