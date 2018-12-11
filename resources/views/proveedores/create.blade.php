@extends('proveedores.layout')
@section('content')


    <h1 class="text-center">Agregar Proveedores</h1>
    <hr>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container">
        <form action="{{ url('/proveedores/store') }}" method="post">
            @csrf


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Nombre de proveedor">
                    </div>
                </div>
            </div>


            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>

        </form>
    </div>


@endsection

