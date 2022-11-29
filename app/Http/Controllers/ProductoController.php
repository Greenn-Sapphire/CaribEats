<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::join('categorias', 'categorias.id', '=', 'productos.categoria_id')
        -> select('productos.*', 'categorias.name as categoria')
        -> paginate(15);

        return view('Producto.index',compact('productos'));

       /*return view('Producto.index');*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|max:191',
            'description' => 'required|max:1000',
            'price' => 'required',
            'quantity' => 'required|integer',
            'image' => 'required',
            'categoriaName' => 'required|max:191',
            'categoria_id' => 'required|integer|exists:categorias,id'
        ]);
        $productos = request()->except('_token');
        if($request->hasFile('image')){
            $productos['image'] = $request->file('image')->store('img', 'public');
        }
        Producto::insert($productos);
        return redirect('productos')->with('success', 'creado');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::findOrFail($id);
        return view('Producto.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = request()->except(['_token', '_method']);
        if($request->hasFile('image')){

            $producto = Producto::findOrFail($id);
            Storage::delete('public/'.$producto->image);

            $productos['image'] = $request->file('image')->store('img', 'public');
        }

        Producto::where('id', '=', $id) -> update($productos);

        return redirect('productos')->with('success', 'editado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        if(Storage::delete('public/'.$producto->image)){
            Producto::destroy($id);
        }

        return redirect('productos')->with('success', 'borrar');
    }
}
