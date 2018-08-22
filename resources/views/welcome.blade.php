<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container{
              width:100%;
              padding-right:15px;
              padding-left:15px;
              margin-right:auto;
              margin-left:auto
              }
              @media (min-width:576px){
                .container{
                  max-width:540px
                  }
                }
                @media (min-width:768px){
                  .container{
                    max-width:720px
                    }
                  }
                  @media (min-width:992px){
                    .container{
                      max-width:960px
                      }
                    }
                    @media (min-width:1200px){
                      .container{max-width:1140px
                        }
                      }
            .container-fluid{
              width:100%;
              padding-right:15px;
              padding-left:15px;
              margin-right:auto;
              margin-left:auto
              }

            .row{
              display:-webkit-box;
              display:-ms-flexbox;
              display:flex;
              -ms-flex-wrap:wrap;
              flex-wrap:wrap;
              margin-right:-15px;
              margin-left:-15px
              }

            .no-gutters{
              margin-right:0;margin-left:0
              }

            .no-gutters>.col,.no-gutters>[class*=col-]{
              padding-right:0;
              padding-left:0
            }
        </style>
    </head>
    <body style="background: url('/images/Kota-Depok.png'); background-size: 100% 120% ;background-position:center;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <section id="content" style="background-color: #fff" class="container-fluid">
              <div class="content">
                <br>
                  <div class="title m-b-md">
                      <b style="color: #1574c1;">e-RT 12/13 </b><br>
                      Mekarsari. Cimanggis. Depok.
                  </div>

                  <div class="links">
                      <a href="{{url('berita')}}">Berita</a>
                      <a href="{{url('surat')}}">Pelayanan Surat Pengantar</a>
                      <a href="{{url('keuangan')}}">Laporan Keuangan RT</a>
                      <a href="{{url('galeri')}}">Galeri</a>
                      <a href="{{url('forum')}}">Forum</a>
                  </div>
                  <br>
                  <br>
              </div>
          </section>

        </div>
    </body>
</html>
