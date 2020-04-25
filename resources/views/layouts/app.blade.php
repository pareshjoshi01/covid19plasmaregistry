<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @yield('metacontent')
  <title>COVID-19 Plasma Donor Registry</title>
  <meta name="description" content="COVID Plasma Registry is a global registry of COVID recovered individuals who are willing to donate their plasma to help patients who are critically ill with COVID. This is designed to bring these two parties find each other is secure and anonymous way without comporimising privacy of donors.">
  <meta name="keywords" content="COVID, COVID-19, plasma, plasma donor, find donor, plasma donor india, find plasma, plasma donor registry, donor register, what is plasma">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="{{ asset('website/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('website/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('website/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('website/assets/css/style.css') }}" rel="stylesheet">

  @yield('csscontent')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!--<h1 class="text-light"><a href="index.html"><span>COVID-19 Plasma Donor Registry</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li @if(Route::currentRouteName() == "welcome") class="active" @endif ><a href="{{ route('welcome') }}">Home</a></li>
          <li @if(Route::currentRouteName() == "donor_register") class="active" @endif><a href="{{ route('donor_register') }}">Donor Registration</a></li>
          <li @if(Route::currentRouteName() == "find_donor") class="active" @endif><a href="{{ route('find_donor') }}">Find Donors</a></li>
          <!--
    		  <li class="drop-down"><a href="">Ramesh Bhil</a>
                <ul>
                  <li><a href="#">User Profile</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
    		  -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
             Open Initiative
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="{{ route('volunteer_contact') }}">Contact to volunteer</a>
            <a href="{{ route('about') }}">About</a>
            <a href="https://github.com/pareshjoshi01/covid19plasmaregistry">Github</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('website/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('website/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <!--<script src="{{ asset('website/assets/vendor/php-email-form/validate.js') }}"></script>-->
  <script src="{{ asset('website/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('website/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('website/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('website/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('website/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('website/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('website/assets/js/main.js') }}"></script>
  @yield('jscontent')

</body>
</html>
