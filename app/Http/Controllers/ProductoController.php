<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

     public function index()
    {
        $producto = Producto::get();

        return view('productos.index', ['posts' => $producto]);
    }

    public function show(Producto $producto)
    {
        return view('productos.show', ['post' => $producto]);
    }

    public function create()
    {

        return view('productos.create', ['post' => new Producto]);
    }

    public function store(StoreProductoRequest $request)
    {      
        $file = $request->file('img');
        echo $path = Storage::putFile('img', $request->file('img'));

        return to_route('productos.index')->with('status', 'Post created!');
    }


    public function edit(Producto $producto)
    {
        return view('productos.edit', ['post' => $producto]);
    }

    public function update(StoreProductoRequest $request, Producto $producto)
    {
        $producto->update($request->validated());

        return to_route('productos.show', $producto)->with('status', 'Post updated!');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return to_route('productos.index')->with('status', 'Post deleted');
    }
}
