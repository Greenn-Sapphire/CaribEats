<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class MenuController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('Menu.index', compact('productos'));
    }
}
