<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productos = DB::table('productos')->get();
        $productos = Producto::get();
        return view('productos/productosIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos/productosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validar
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'enlace' => 'url',
        ]);

        //Guardar
        /* $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion ?? '';
        $producto->enlace = $request->enlace ?? '';
        $producto->save(); */

         $request->merge([
            'descripcion' => $request->descripcion ?? '',
            'enlace' => $request->enlace ?? '',
        ]);

        Producto::create($request->all());

        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos/productoShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos/productosForm', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {

        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'enlace' => 'url',
        ]);

        $request->merge([
            'descripcion' => $request->descripcion ?? '',
            'enlace' => $request->enlace ?? '',
        ]);

        Producto::where('id', $producto->id)->update($request->except('_token', '_method'));

        return redirect()->route('producto.show', [$producto]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
