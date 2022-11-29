@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/navbar.css')}}" >
@endsection

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="">CaribEats</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#topNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="navbar-collapse collapse justify-content-end" id="topNavbar">
        <ul class="navbar-nav">
            @auth
                @yield('button')
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>

                    </div>
                </li>
                <li class="nav-item">
                    <span class="nav-link">
                        Bienvenido: {{auth()->user()->name}}
                    </span>
                    <ul class="editor">
                        <li><a href="">Método de pago</a></li>
                        <li><a href="{{url('/productos')}}">Productos</a></li>
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
