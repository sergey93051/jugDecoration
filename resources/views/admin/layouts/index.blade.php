<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>
   <main>
    <div>
        <h1>Admin</h1>
    </div>
    <div>
        <h2>menu</h2>
        <nav>
            <ul>
                <li><a href="{{  route("admin") }}">Home</a></li>
                <li><a href="{{  route("showprod") }}">add Product</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
 
    </div>
    <div>
        @yield('addProd')
   </div>
  </main> 
</body>
</html>