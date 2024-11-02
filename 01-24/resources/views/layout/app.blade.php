<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<title data-react-helmet="true">Shoping Nalavariyam</title>
<meta name="description" content="Shoping Nalavariyam">
<meta name="google-site-verification" content="l1WHPb1Jb9hv-164zHGRs-vPSWee-pCr2qvVR0K_wnM" />
<meta name="keywords" content="Shoping Nalavariyam">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="address" content="Shoping Nalavariyam, TamilNadu 629003, India, " />
<meta name="author" content="Galaxy Kannan" />
<meta name="contact" content="9344332244" />




  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{!! asset('css/style.css') !!}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{!! asset('css/responsive.css') !!}" rel="stylesheet" />

    @yield('third_party_stylesheets')

    @stack('page_css')
	
</head>
  <div class="hero_area">

        @include('layout.header')
        @yield('content')
        @include('layout.footer')

        @yield('third_party_scripts')
 <script src="{!! asset('js/jquery-3.4.1.min.js') !!}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{!! asset('js/bootstrap.js') !!}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- custom js -->
  <script src="{!! asset('js/custom.js') !!}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  
</body>

</html>
