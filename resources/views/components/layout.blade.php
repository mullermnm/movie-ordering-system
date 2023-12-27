<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Muller Entertainment</title>
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/multi-select-tag.css') }}">
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
</head>
<body id="top">
    <section class="s-pageheader s-pageheader--home">
        @include('partials._header')
        @include('partials._preloader')
    </section>
    {{ $slot }}
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/multi-select-tag.js') }}"></script>
</body>
</html>
