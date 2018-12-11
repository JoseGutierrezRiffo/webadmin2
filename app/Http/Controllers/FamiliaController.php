<?php

namespace App\Http\Controllers;

use App\Familia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FamiliaController extends Controller
{

    public function index()
    {
        $familia = Familia::orderBy('id', 'DESC')->paginate(3);
        return view('familias/index', compact('familia'));
    }


    public function create()
    {
        return view('familias/create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Familia::create($request->all());
        session::flash('message', 'Familia creado correctamente');
        return back();
    }


    public function show(Familia $familia)
    {
        //
    }


    public function edit($id)
    {
        $familia = Familia::where('id', $id)->first();
        return view('familias/edit', compact('familia'));
    }


    public function update(Request $request, Familia $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $id->update([
            'name' => $request->name
        ]);

        session::flash('message', 'Producto eleminado');
        return back();
    }


    public function destroy(Familia $id)
    {
        $id->delete();
        session::flash('message', 'Producto eleminado');
        return back();
    }
}
