<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductoController extends Controller
{

    public function index()
    {
        $producto = Producto::orderBy('code', 'DESC')->paginate(3);
        return view('productos/index', compact('producto'));
    }


    public function create()
    {
        return view('productos/create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'stock_treshold' => 'required',
            'family_id' => 'required',
            'provider_id' => 'required',
            'purchase_quantity' => 'required'
        ]);

        $producto = new Producto;

        $producto->code = $request->get('code');
        $producto->name = $request->get('name');
        $producto->description = $request->get('description');
        $producto->price = $request->get('price');
        $producto->stock = $request->get('stock');
        $producto->stock_treshold = $request->get('stock_treshold');
        $producto->family_id = $request->get('family_id');
        $producto->provider_id = $request->get('provider_id');
        $producto->purchase_quantity = $request->get('purchase_quantity');
        $producto->status = 0;

        $producto->save();

        session::flash('message', 'Producto creado correctamente');
        return back();
    }


    public function show(Producto $prod)
    {

    }


    public function edit($code)
    {

        $producto = Producto::where('code', $code)->first();

        return view('productos/edit', compact('producto'));
    }


    public function update(Request $request, $code)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'stock_treshold' => 'required',
            'family_id' => 'required',
            'provider_id' => 'required',
            'purchase_quantity' => 'required'
        ]);

        $producto = Producto::find($code);
        $producto->name = $request->get('name');
        $producto->description = $request->get('description');
        $producto->price = $request->get('price');
        $producto->stock = $request->get('stock');
        $producto->stock_treshold = $request->get('stock_treshold');
        $producto->family_id = $request->get('family_id');
        $producto->provider_id = $request->get('provider_id');
        $producto->purchase_quantity = $request->get('purchase_quantity');
        $producto->save();

        session::flash('message', 'Producto actualizado correctamente');
        return back();
    }


    public function destroy(Producto $code)
    {

        $code->delete();
        session::flash('message', 'Producto eleminado');
        return back();
    }
}
