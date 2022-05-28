<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UDISCOVER</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/choices.js/public/assets/styles/choices.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src="{{ asset('img/avatar-7.jpg')}}" alt="person">
          <h2 class="h5 text-white text-uppercase mb-0">Jonathan Cruz</h2>
          <p class="text-sm mb-0 text-muted">Backend Developer</p>
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
          <p class="h1 m-0">BD</p></a>
      </div>
      <!-- Sidebar Navigation Menus--><span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>
      <ul class="list-unstyled">                  
        <li class="sidebar-item"><a class="sidebar-link" href="{{route('dash')}}"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#real-estate-1"> </use>
            </svg>Home </a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="/companias"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#survey-1"> </use>
            </svg>Compañias </a></li>
       
        <li class="sidebar-item"><a class="sidebar-link" href="/empleados"> 
            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
              <use xlink:href="#portfolio-grid-1"> </use>
            </svg>Empleados </a></li>
     
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
              <div class="d-flex align-items-center"><a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900" id="toggle-btn" href="#">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                    <use xlink:href="#menu-1"> </use>
                  </svg></a><a class="navbar-brand ms-2" href="/dash">
                  <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0"><span class="text-white fw-normal text-xs">Bootstrap </span><strong class="text-primary text-sm">Dashboard</strong></div></a></div>
              <ul class="nav-menu mb-0 list-unstyled d-flex flex-md-row align-items-md-center">
               
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-white text-sm" id="languages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('img/flags/16/GB.png')}}" alt="English"><span class="d-none d-sm-inline-block ms-2">English</span></a>
                  <ul class="dropdown-menu dropdown-menu-end mt-sm-3 shadow-sm" aria-labelledby="languages">
                    <li><a class="dropdown-item" rel="nofollow" href="#!"> <img class="me-2" src="{{ asset('img/flags/16/DE.png')}}" alt="English"><span>German</span></a></li>
                    <li><a class="dropdown-item" rel="nofollow" href="#!"> <img class="me-2" src="{{ asset('img/flags/16/FR.png')}}" alt="English"><span>French                                                         </span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a class="nav-link text-white text-sm ps-0" href="{{route('logout')}}"> <span class="d-none d-sm-inline-block">Logout</span>
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#security-1"> </use>
                    </svg></a></li>
               
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <section class="py-5">
        <div class="container-fluid">
          @yield('content')
        </div>
      </section>
    
      
      <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
        <div class="container-fluid">
          <div class="row text-center gy-3">
            <div class="col-sm-6 text-sm-start">
              <p class="mb-0 text-sm text-gray-600">Udiscover &copy; 2022</p>
            </div>
            <div class="col-sm-6 text-sm-end">
              <p class="mb-0 text-sm text-gray-600">Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Jonathan cruz</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('vendor/just-validate/js/just-validate.min.js')}}"></script>
    <script src="{{ asset('vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script src="{{ asset('vendor/overlayscrollbars/js/OverlayScrollbars.min.js')}}"></script>
    <script src="{{ asset('js/charts-home.js')}}"></script>
    <!-- Main File-->
    <script src="{{ asset('js/front.js')}}"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>