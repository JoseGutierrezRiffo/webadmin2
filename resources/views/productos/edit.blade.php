@extends('productos.layout')
@section('content')


    <h1 class="text-center">Editar Productos</h1>
    <hr>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container">
        <form action="{{ url('/productos/update', $producto->code)}}" method="POST">

            @csrf
            @method('PUT')



            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="name" value="{{ $producto->name }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        <textarea name="description" class="form-control" cols="30" rows="2"> {{ $producto->description }} </textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Precio:</strong>
                        <input type="number" name="price" value="{{ $producto->price }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Stock:</strong>
                        <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Limite de Stock:</strong>
                        <input type="number" name="stock_treshold" value="{{ $producto->stock_treshold }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Grupo Familia:</strong>
                        <input type="number" name="family_id" value="{{ $producto->family_id }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Codigo Proveedor:</strong>
                        <input type="number" name="provider_id" value="{{ $producto->provider_id }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad de Compra:</strong>
                        <input type="number" name="purchase_quantity" value="{{ $producto->purchase_quantity }}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>

        </form>
    </div>


@endsection

