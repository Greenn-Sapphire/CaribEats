@extends('layout.navbar')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/Menu.css')}}" >
@endsection

@section('content')
        <div class="container">
            <div class="container text-center">
                <div class="row">
                    @foreach ($productos as $producto)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="{{$producto->image}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$producto->name}}</h5>
                                    <p class="card-text">{{$producto->description}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$producto->CategoriaName}}</li>
                                    <li class="list-group-item">${{$producto->price}} MXN</li>
                                    <li class="list-group-item">En stock</li>
                                </ul>
                                <div class="card-body">
                                    <button type="button" class="btn btn-success">Añadir al carrito</button>
                                </div>
                            </div><br>
                        </div>
                    @endforeach
                </div><br>
            </div>
        </div>
        @switch(true)
            @case(session('success') == 'ok')
                <script type="text/javascript">
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: '¡Hola, Bienvenido!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                @break
            @case(session('success') == 'exito')
                <script type="text/javascript">
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Usuario registrado correctamente',
                        showConfirmButton: false,
                        timer: 2000
                    })
                </script>
                @break
        @endswitch
@endsection
