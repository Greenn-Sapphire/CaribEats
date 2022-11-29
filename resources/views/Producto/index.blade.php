@extends('layout.navbar')

@section('button')
        <li class="nav-item active ">
            <a class="nav-link" href="#">Ver Usuarios</a><span class="sr-only">(current)</span></a>
        </li>
@endsection

@section('content')
    @php
	    $count = $productos->firstItem();
	@endphp
    <div class="container-fluid">
        <div>
            <a href="{{url('productos/create')}}" class="btn btn-success"> Crear producto</a>
            <a href="{{url('/menu')}}" class="btn btn-primary">Volver al menu</a>
        </div> <br>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-light">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($productos as $producto)
                        <tr>
                            <th scope="row">{{ $count++ }}</th>
                            <td>{{ $producto->name}}</td>
                            <td>{{ $producto->description }}</td>
                            <td>{{ $producto->price}}</td>
                            <td>{{ $producto->quantity }}</td>
                            <td>{{ $producto->categoriaName}}</td>
                            <td>
                                <img src="{{asset('storage').'/'.$producto->image }}" width="150" class="img-thumbnail img-fluid">
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{url('/productos/'.$producto->id.'/edit')}}">Editar</a>

                                <form method="post" action="{{ url('/productos/'.$producto->id) }}" style="display: inline">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Borrar: {{$producto->id}}?');">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
						    <td colspan="4" style="color: red;"> SIN REGISTROS </td>
					    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @switch(true)
        @case(session('success') == 'creado')
            <script type="text/javascript">
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto creado con exito',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
            @break
        @case(session('success') == 'exito')
            <script type="text/javascript">
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto registrado correctamente',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
            @break
        @case(session('success') == 'editado')
            <script type="text/javascript">
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto editado correctamente',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
            @break
    @endswitch
@endsection
