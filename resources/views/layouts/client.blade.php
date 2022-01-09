<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/fonts/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/fonts/boxicons/boxicons-2.0.9/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/splide-core.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/jquery-confirm.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
    @yield('css')
</head>
<body>
    @include('clients.blocks.header')
    <main>
{{--        <aside>--}}
{{--            @include('clients.blocks.sidebar')--}}
{{--        </aside>--}}
        @yield('content')

    </main>
    @include('clients.blocks.footer')
    <script src="{{asset('assets/clients/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/jquery-confirm.js')}}"></script>
    <script src="{{asset('assets/clients/js/main.js')}}"></script>
    <script src="{{asset('assets/clients/js/style.js')}}"></script>
    @yield('js')
</body>
</html>
