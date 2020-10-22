<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Admin</title>
    <style>
        .Admin__table,.Role__table,.showProd{
            margin:auto 10%;
        }
        .add__roleCate,.admin__form{
            border: 1px solid black;
            width: 400px;
            height: auto;
            margin-left: 10%;
            margin-bottom: 15px;
            padding: 10px;
        }
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
                <li><a href="{{  route("showCate") }}">add category</a></li>
                <li><a href="{{  route("showprod") }}">add Product</a></li>
                <li><a href="{{  route("message") }}">message</a></li>
                <li><a href="{{  route("orders") }}">orders</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
 
    </div>
    <div>
        @yield('control')
   </div>
  </main> 
</body>
</html>