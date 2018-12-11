@extends('proveedores.layout')
@section('content')


    <h1 class="text-center">Editar Proveedores</h1>
    <hr>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container">
        <form action="{{ url('/proveedores/update', $proveedor->id)}}" method="POST">

            @csrf
            @method('PUT')


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="name" value="{{ $proveedor->name }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar Proveedores</button>
            </div>

        </form>
    </div>


@endsection