<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('page1')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="showdown"></div>
    @yield('containerMain')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


