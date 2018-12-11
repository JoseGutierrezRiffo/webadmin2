<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class proveedorController extends Controller

{

    public function index()
    {
        $proveedor = Proveedor::paginate(3);
        return view('proveedores/index', compact('proveedor'));
    }


    public function create()
    {
        return view('proveedores/create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Proveedor::create($request->all());
        session::flash('message', 'Proveedor creado correctamente');
        return back();
    }


    public function show(Proveedor $proveedor)
    {
        //
    }


    public function edit($id)
    {
        $proveedor = Proveedor::where('id', $id)->first();
        return view('proveedores/edit', compact('proveedor'));
    }


    public function update(Request $request, Proveedor $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $id->update([
            'name' => $request->name
        ]);

        session::flash('message', 'Proveedor actualizado');
        return back();
    }


    public function destroy(Proveedor $id)
    {
        $id->delete();
        session::flash('message', 'Proveedor eleminado');
        return back();
    }
}

