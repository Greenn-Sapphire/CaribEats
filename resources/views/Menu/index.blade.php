@extends('layout.navbar')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/Menu.css')}}" >
@endsection

@section('content')
    <div class="container">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1>Catalogo de productos</h1><br>
                </div>
            </div>
            <div class="row">
                @foreach ($productos as $producto)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage').'/'.$producto->image}}" class="card-img-top" alt="{{$producto->image}}">

                            <div class="card-body">
                                <h4 class="card-title">{{$producto->name}}</h4>
                                <p class="card-text">{{$producto->description}}</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$producto->CategoriaName}}</li>
                                    <li class="list-group-item">${{$producto->price}} MXN</li>
                                    <li class="list-group-item">En stock</li>
                                </ul>

                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$producto->id}}" name="id" id="id">
                                    <br>
                                    <input type="submit" name="btn" class="btn btn-success" value="Añadir al carrito">
                                </form>
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
        @case(session('success') == 'borrar')
            <script type="text/javascript">
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto eliminado con exito',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
            @break
    @endswitch
@endsection
