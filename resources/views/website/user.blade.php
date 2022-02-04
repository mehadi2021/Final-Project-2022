<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>C0_Operative Society Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('img/favicon.png') }}" rel="icon">
    <link href="{{ url('website/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('website/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{url('website/css/templatemo-finance-business.css')  }}">
    <link rel="stylesheet" href="{{ url('website/css/owl.css') }}">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

     @include('website.fixeds.header')

    <!-- Page Content -->

@yield('content')

    <!-- Footer Starts Here -->

    @include('website.fixeds.footer')
       <!-- Bootstrap core JavaScript -->
    <script src="{{ url('website/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('website/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ url('website/js/custom.js') }}"></script>
    <script src="{{ url('website/js/owl.js') }}"></script>
    <script src="{{ url('website/js/slick.js') }}"></script>
    <script src="{{ url('website/js/accordions.js') }}"></script>


  </body>
</html>
