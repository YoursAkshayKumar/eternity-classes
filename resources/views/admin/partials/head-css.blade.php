{{-- Layout JS --}}
    <script src="{{ asset('assets/admin/js/vendor-all-new.js') }}"></script>
@if(!empty($horizontal))
    <script src="{{ asset('assets/admin/js/layout/' . $horizontal . '.js') }}"></script>
@elseif(!empty($twocolumn))
    <script src="{{ asset('assets/admin/js/layout/' . $twocolumn . '.js') }}"></script>
@elseif(!empty($compact))
    <script src="{{ asset('assets/admin/js/layout/' . $compact . '.js') }}"></script>
@elseif(!empty($semibox))
    <script src="{{ asset('assets/admin/js/layout/' . $semibox . '.js') }}"></script>
@elseif(!empty($smallicon))
    <script src="{{ asset('assets/admin/js/layout/' . $smallicon . '.js') }}"></script>
@elseif(!empty($auth))
    <script src="{{ asset('assets/admin/js/layout/' . $auth . '.js') }}"></script>
@else
    <script src="{{ asset('assets/admin/js/layout/layout-default.js') }}"></script>
@endif

<script src="{{ asset('assets/admin/js/layout/layout.js') }}"></script>

<script src="{{ asset('assets/admin/plugins/jquery-validation-1.17.0/dist/jquery.validate.min.js') }}"></script>


{{-- CSS Dependencies --}}
<link rel="stylesheet" href="{{ asset('assets/admin/libs/choices.js/public/assets/styles/choices.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/libs/simplebar/simplebar.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/libs/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" id="bootstrap-style">
<link rel="stylesheet" href="{{ asset('assets/admin/css/app.min.css') }}" id="app-style">
<link rel="stylesheet" href="{{ asset('assets/admin/css/custom.min.css') }}" id="custom-style">
<link rel="stylesheet" href="{{ asset('assets/admin/css/toastr.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}" />
