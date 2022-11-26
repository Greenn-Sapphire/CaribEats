<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbar.css">

    @yield('css')
    <title>Caribeats</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="">CaribEats</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#topNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="topNavbar">
                <ul class="navbar-nav">
                    @auth
                    <li>
                        <img src="https://cdn-icons-png.flaticon.com/512/1218/1218339.png?w=740&t=st=1669418352~exp=1669418952~hmac=33581ded4f1de61bcb2e9e851612aac729a77df7c7c7d3122e738883431f27e3.png" class="cart-icon"></img>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            Bienvenido: {{auth()->user()->name}}
                        </span>
                        <ul>
                            <li><a href="">Método de pago</a></li>
                            <li><a href="{{route('logout')}}">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/" class="nav-link">Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
    <br>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('content')
</body>
</html>
