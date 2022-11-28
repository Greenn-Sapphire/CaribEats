@extends('layout.navbar')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/canasta.css')}}" >
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>CaribEats</title>
    </head>

    <body>
        <h1>Tu canasta<h1>
        <div class="cart-container">
            
            <div class="product-container">
                <img src="https://t4.kn3.net/taringa/6/3/0/9/9/0/bulldocer/6A9.jpg"></img>
                <div class="description-container">
                    <h1>Nombre de articulo</h1>
                    <h3>$Subtotal</h3>
                </div>
                <div class="product-counter">
                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                        <input type="text" value="1">
                    <span class="up" onClick='increaseCount(event, this)'>+</span>
                </div>
                <button class="clear-button">X</button>
            </div>
            <hr></hr>

            <div class="total-container">
                <h2>Total: $</h2>
                <button>Pagar</button>
            </div>
        </div>
    </body>
    </html>
@endsection