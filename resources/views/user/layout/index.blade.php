<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ddd76128b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('titulo')</title>
</head>
<body>

<!-- Navbar -->
@navbar
@endnavbar

<!-- Conteud -->
@yield('contents')

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>