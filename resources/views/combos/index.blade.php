@extends('combos.layout')
@section('content')

    <h1 class="text-center">Proveedores</h1>
    <hr>

    <div class="container">

        <a class="btn btn-info mb-3" href="{{ url('/combos/create') }}">Agregar Combos</a>

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Combos</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($combo as $combos)
                <tr>
                    <th scope="row">{{ $combos->id }}</th>
                    <td>{{ $combos->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $combos->links() }}
    </div>

@endsection
