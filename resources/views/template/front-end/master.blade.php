<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Lindy - Bootstrap 5 UI Kit</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('lindyui/asset/css/bootstrap-5.0.0-alpha-2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lindyui/asset/css/LineIcons.2.0.css')}}"/>
    <link rel="stylesheet" href="{{asset('lindyui/asset/css/tiny-slider.css')}}"/>
    <link rel="stylesheet" href="{{asset('lindyui/asset/css/glightbox.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('lindyui/asset/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('lindyui/asset/css/lindy-uikit.css')}}"/>

    <link rel="stylesheet" href="{{asset('dashboardkit/asset/fonts/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboardkit/asset/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('dashboardkit/asset/fonts/material.css')}}">

    <link rel="stylesheet" href="{{asset('custom.css')}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('dashboardkit/asset/css/style.css')}}" id="main-style-link">


  </head>
  <!-- <body style="background-color: #8DA7BE;"> -->
    <body class="bg-white">
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= header-1 start ========================= -->
  
    <!-- ========================= header-1 end ========================= -->

    <!-- ========================= header-2 start ========================= -->
  @yield('content')
    <!-- ========================= header-2 end ========================= -->

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('lindyui/asset/js/bootstrap.5.0.0.alpha-2-min.js')}}"></script>
    <script src="{{asset('lindyui/asset/js/tiny-slider.js')}}"></script>
    <script src="{{asset('lindyui/asset/js/count-up.min.js')}}"></script>
    <script src="{{asset('lindyui/asset/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('lindyui/asset/js/isotope.min.js')}}"></script>
    <script src="{{asset('lindyui/asset/js/glightbox.min.js')}}"></script>
    <script src="{{asset('lindyui/asset/js/wow.min.js')}}"></script>
    <script src="{{asset('lindyui/asset/js/main.js')}}"></script>

    <script src="{{asset('dashboardkit/asset/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('dashboardkit/asset/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboardkit/asset/js/plugins/feather.min.js')}}"></script>
    <script src="{{asset('dashboardkit/asset/js/pcoded.min.js')}}"></script>

    <script>
      //===== header-1 toggler-icon

      // header-2  toggler-icon
      let navbarToggler2 = document.querySelector(".header-2 .navbar-toggler");
      var navbarCollapse2 = document.querySelector(".header-2 .navbar-collapse");

      document.querySelectorAll(".header-2 .page-scroll").forEach(e =>
          e.addEventListener("click", () => {
              navbarToggler2.classList.remove("active");
              navbarCollapse2.classList.remove('show')
          })
      );
      navbarToggler2.addEventListener('click', function() {
          navbarToggler2.classList.toggle("active");
      })
    
    </script>

  </body>
</html>
