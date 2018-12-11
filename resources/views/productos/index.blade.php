@extends('productos.layout')
@section('content')

    <h1 class="text-center">Productos</h1>
    <hr>

        <div class="container">

            <a class="btn btn-info mb-3" href="{{ url('/productos/create') }}">Agregar Productos</a>

            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif


            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Familia</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($producto as $productos)
                <tr>
                    <th scope="row">{{ $productos->code }}</th>
                    <td>{{ $productos->name }}</td>
                    <td>{{ $productos->description }}</td>
                    <td>{{ $productos->price }}</td>
                    <td>{{ $productos->stock }}</td>
                    <td>{{ $productos->family_id }}</td>
                    <td><a class="btn btn-info" href="{{ url('/productos/edit', $productos->code) }}"><i class="fas fa-edit"></i></a>
                        {{--<a class="btn btn-info"  href="{{ url('/productos/destroy', $productos->code) }}" disabled="true"><i class="fa--}}{{--s fa-trash"></i></a>--}}
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
                    {{ $producto->links() }}
        </div>

@endsection

