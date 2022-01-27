<!doctype html>
<!-- saved from url=(0047)https://bootstrapmade.com/demo/templates/Arsha/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Felicia Lng School</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!--bootstrap-->
    <link href="{{asset('events-css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Favicons -->
    <link href="https://bootstrapmade.com/demo/templates/Arsha/assets/img/favicon.png" rel="icon">
    <link href="https://bootstrapmade.com/demo/templates/Arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="../../../../events-css/css" rel="stylesheet">
  
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="../../../../events-css/aos.css" rel="stylesheet">
    <link href="../../../../events-css/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../../events-css/boxicons.min.css" rel="stylesheet">
    <link href="../../../../events-css/glightbox.min.css" rel="stylesheet">
    <link href="../../../../events-css/remixicon.css" rel="stylesheet">
    <link href="../../../../events-css/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="../../../../events-css/style.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Arsha - v4.7.1
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

 <body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                               <!-- ======= Header ======= -->
                            <header id="header" class="fixed-top">
                                <div class="container d-flex align-items-center">

                                <h1 class="logo me-auto"><a href="https://bootstrapmade.com/demo/templates/Arsha/index.html">Arsha</a></h1>
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                                <nav id="navbar" class="navbar">
                                    <ul>
                                    <li><a class="nav-link scrollto active" href="https://bootstrapmade.com/demo/templates/Arsha/#hero">Home</a></li>
                                    <li><a class="nav-link scrollto" href="https://bootstrapmade.com/demo/templates/Arsha/#about">About</a></li>
                                    <li><a class="nav-link scrollto" href="https://bootstrapmade.com/demo/templates/Arsha/#services">Services</a></li>
                                    <li><a class="nav-link scrollto" href="https://bootstrapmade.com/demo/templates/Arsha/#team">Team</a></li>
                                    <li class="dropdown"><a href="https://bootstrapmade.com/demo/templates/Arsha/#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                                        <ul>
                                        <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Drop Down 1</a></li>
                                        <li class="dropdown"><a href="https://bootstrapmade.com/demo/templates/Arsha/#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                            <ul>
                                            <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Deep Drop Down 1</a></li>
                                            <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Deep Drop Down 2</a></li>
                                            <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Deep Drop Down 3</a></li>
                                            <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Deep Drop Down 4</a></li>
                                            <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Deep Drop Down 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Drop Down 2</a></li>
                                        <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Drop Down 3</a></li>
                                        <li><a href="https://bootstrapmade.com/demo/templates/Arsha/#">Drop Down 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-link scrollto" href="https://bootstrapmade.com/demo/templates/Arsha/#contact">Contact</a></li>
                                    <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Hello {{ Auth::user()->name }}
                                    </a></li>
                                    <button class="text-dark"> 
                                        <a class="dropdown-item" href="{{ route('logout')}}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </button>
                                    </ul>
                                    <i class="bi bi-list mobile-nav-toggle"></i>
                                </nav><!-- .navbar -->

                                </div>
                            </header><!-- End Header -->                               
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')
            @yield('landing')
            @yield('productform')
            @yield('edtproduct')

    </div>
            <!-- Vendor JS Files -->
            <script src="../../../events-css/aos.js.descarga"></script>
            <script src="../../../events-css/bootstrap.bundle.min.js.descarga"></script>
            <script src="../../../events-css/glightbox.min.js.descarga"></script>
            <script src="../../../events-css/isotope.pkgd.min.js.descarga"></script>
            <script src="../../../events-css/swiper-bundle.min.js.descarga"></script>
            <script src="../../../events-css/noframework.waypoints.js.descarga"></script>
            <script src="../../../events-css/validate.js.descarga"></script>

            <!-- Template Main JS File -->
            <script src="../../../events-css/main.js.descarga"></script>
            <script src="{{asset('events-css/bootstrap.bundle.min.js.descarga')}}" ></script>


            <script>
                if( window.self == window.top ) { (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-55234356-4', 'auto'); ga('send', 'pageview'); }
            </script>
            <script 
                async="" src="../../../events-css/Arsha Bootstrap Template Demo_files/analytics.js.descarga">
            </script>
            <script>
                script src="../../../events-css/Arsha Bootstrap Template Demo_files/demo-2.8.0.js.descarga">
            </script>
           <script>
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-55234356-4', 'auto');
          </script>
 </body>
</html>
