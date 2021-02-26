<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
       <!-- ad -->
       {{-- <script data-ad-client="ca-pub-4569907711909738" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> --}}
    <!-- g -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-34ETLJ68LN"></script> --}}
   <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());
       gtag('config', 'G-34ETLJ68LN');
     </script>
    <!--end-->
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     @yield('fclink')
    <title> @yield('page1')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>         
   <div class="container-fluid showdown"></div>
    <header>
    @yield('header') 
   </header>
    @section('fcmess')
    @show
    @yield('containerMain')
   <footer>
        @yield('footer')
    </footer>
    <script src="{{ mix('/js/app.js') }}"></script>  
</body>
</html>


