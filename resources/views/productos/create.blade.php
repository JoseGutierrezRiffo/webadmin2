@extends('productos.layout')
@section('content')


    <h1 class="text-center">Agregar Productos</h1>
    <hr>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container">
        <form action="{{ url('/productos/store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Codigo:</strong>
                    <input type="number" name="code" class="form-control" placeholder="00X">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre de producto">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <textarea name="description" class="form-control" cols="30" rows="2"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Precio:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Precio">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Stock:</strong>
                    <input type="number" name="stock" class="form-control" placeholder="Stock de producto">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Limite de Stock:</strong>
                    <input type="number" name="stock_treshold" class="form-control" placeholder="Limite de stock">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Grupo Familia:</strong>
                    <input type="number" name="family_id" class="form-control" placeholder="Grupo de familia">
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Codigo Proveedor:</strong>
                        <input type="number" name="provider_id" class="form-control" placeholder="Codigo proveedor">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Cantidad de Compra:</strong>
                        <input type="number" name="purchase_quantity" class="form-control" placeholder="Cantidad de compra">
                    </div>
                </div>
            </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>

        </form>
    </div>


@endsection

