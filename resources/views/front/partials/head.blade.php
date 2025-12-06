  <title>{{ env('APP_NAME') }} | {{ $title ?? 'Home' }}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="apple-touch-icon" href="{{ asset('assets/front/images/site-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/front/images/site-icon.png') }}">

  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('assets/front/images/site-icon.png') }}">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- StyleSheet link CSS -->
  <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css?v=' ) . time() }}">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{{ asset('assets/front/bootstrap/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/front/css/superclasses.css?v=' ) . time() }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/front/css/custom.css?v=' ) . time() }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/front/css/style.css?v=' ) . time() }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css?v=' ) . time() }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
