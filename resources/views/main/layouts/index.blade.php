<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('page1')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
   <div class="container-fluid showdown" style="background: rgba(236, 235, 235, 0.808);opacity:0.4;"></div> 
    @yield('header')
    @yield('containerMain')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>


