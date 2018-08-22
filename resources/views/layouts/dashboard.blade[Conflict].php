<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
    <title>
        Dashboard e-RT by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="../assets/css/material-dashboard.css?v=2.0.0"> -->
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.0.0') }}">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="../assets/assets-for-demo/demo.css" rel="stylesheet" /> -->
    <!-- iframe removal -->
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
    tinymce.init({
      selector: '#WYSIWYG'
    });
    </script>
</head>

<body class="" style="background: url('/images/wallpaper.JPG'); background-size: cover; ">
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text logo-normal">
                    e-RT 12/13
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item {{ Request::is('admin/warga*') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ url('/admin/warga/list') }}">
                        <i class="material-icons">person</i>
                        <p>Daftar Warga</p>
                      </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/berita/list*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/berita/list')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Daftar Berita</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/berita/create*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/berita/create') }}">
                            <i class="material-icons">content_paste</i>
                            <p>Terbitkan Berita</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/surat*') ? 'active' : '' }}">
                        <a class="nav-link" href="../examples/typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Surat Pengantar</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/galeri*') ? 'active' : '' }}">
                        <a class="nav-link" href="/admin/galeri/create">
                            <i class="material-icons">camera_roll</i>
                            <p>Galeri</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/keuangan*') ? 'active' : '' }}">
                        <a class="nav-link" href="../examples/maps.html">
                            <i class="material-icons">insert_chart</i>
                            <p>Keuangan RT</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link" href="../examples/notifications.html">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active-pro">
                        <a class="nav-link" href="../examples/upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
          <!-- Navebar -->
          <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top" >
              <div class="container-fluid text-secondary">
                  <div class="navbar-wrapper">
                      <a class="navbar-brand" href="{{ url('/admin')}}">e-RT 12/13 Mekarsari. Cimanggis. Depok. <br>Admin Dashboard</a>
                  </div>
                  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                      <span class="navbar-toggler-icon icon-bar"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navigation">
                      <form class="navbar-form">
                          <div class="input-group no-border">
                              <input type="text" value="" class="form-control" placeholder="Search...">
                              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                  <i class="material-icons">search</i>
                                  <div class="ripple-container"></div>
                              </button>
                          </div>
                      </form>
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="#pablo">
                                  <i class="material-icons">dashboard</i>
                                  <p>
                                      <span class="d-lg-none d-md-block">Stats</span>
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="material-icons">notifications</i>
                                  <span class="notification">5</span>
                                  <p>
                                      <span class="d-lg-none d-md-block">Some Actions</span>
                                  </p>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                  <a class="dropdown-item" href="#">Another Notification</a>
                                  <a class="dropdown-item" href="#">Another One</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#pablo">
                                  <i class="material-icons">person</i>
                                  <p>
                                      <span class="d-lg-none d-md-block">Account</span>
                                  </p>
                              </a>
                          </li> -->
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="material-icons">person</i>
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
                                                   <i class="material-icons" style="font-size: 12pt">exit_to_app</i>
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
          <!-- End of Navbar -->
          <main class="py-4">
            <br><br><hr>
              @yield('content')
          </main>
        </div>

    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('js-admin/core/jquery.min.js') }}" defer></script>
<script src="{{ asset('js-admin/core/popper.min.js') }}" defer></script>
<script src="{{ asset('js-admin/bootstrap-material-design.js') }}" defer></script>
<script src="{{ asset('js-admin/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{ asset('js-admin/plugins/chartist.min.js') }}" defer></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('js-admin/plugins/arrive.min.js') }}" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ asset('js-admin/plugins/bootstrap-notify.js') }}" defer></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="{{ asset('js-admin/material-dashboard.js?v=2.0.0') }}" defer></script>
<!-- demo init -->
<script src="{{ asset('js-admin/plugins/demo.js') }}" defer></script>
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>
<!--

































 -->

</html>
