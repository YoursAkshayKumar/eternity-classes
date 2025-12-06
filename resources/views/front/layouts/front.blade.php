<!DOCTYPE html>
<html lang="HTML">

<head>
    @include('front.partials.head')
</head>

<body class="index2-outer-wrapper">
    @include('front.partials.preloader')
    @include('front.partials.moving-offer-banner')
    @include('front.partials.header')
    @yield('content')
    @include('front.partials.footer')
    @include('front.partials.floating-icons')
    @include('front.partials.scripts')
</body>

</html>