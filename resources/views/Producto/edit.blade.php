@extends('layout.navbar')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/Menu.css')}}" >
@endsection

@section('content')
    <div class="container">
        <form method="post" enctype="multipart/form-data" action="{{url('/productos/'.$productos->id)}}">
            @csrf
            {{method_field('PATCH')}}
            @include('Producto.form', ['Modo' => 'editar'])
        </form>
    </div>
@endsection
