@extends('proveedores.layout')
@section('content')

    <h1 class="text-center">Proveedores</h1>
    <hr>

    <div class="container">

        <a class="btn btn-info mb-3" href="{{ url('/proveedores/create') }}">Agregar Proveedores</a>

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedor as $proveedores)
                <tr>
                    <th scope="row">{{ $proveedores->id }}</th>
                    <td>{{ $proveedores->name }}</td>
                    <td><a class="btn btn-info" href="{{ url('proveedores/edit', $proveedores->id) }}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-info" href="{{ url('proveedores/destroy', $proveedores->id) }}"><i class="fas fa-trash"></i></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $proveedor->links() }}
    </div>

@endsection

