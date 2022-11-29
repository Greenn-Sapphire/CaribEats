<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Cart;

class MenuController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('Menu.index')->with(['productos'=> $productos]);
    }

    public function cart(){
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);;
    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request $request){
        $productos = Producto::find($request -> id);
        
        Cart::add(
            $productos -> id,
            $productos -> name,
            $productos -> price,
            1,
            array("image" => $productos->image)
        );
        return redirect('/cart')->with('success_msg', 'Item Agregado a sú Carrito!');;
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

}
