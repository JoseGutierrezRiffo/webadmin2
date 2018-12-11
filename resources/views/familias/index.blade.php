@extends('familias.layout')
@section('content')

    <h1 class="text-center">Familias</h1>
    <hr>

    <div class="container">

        <a class="btn btn-info mb-3" href="{{ url('/familias/create') }}">Agregar Familias</a>

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
            @foreach($familia as $familias)
                <tr>
                    <th scope="row">{{ $familias->id }}</th>
                    <td>{{ $familias->name }}</td>
                    <td><a class="btn btn-info" href="{{ url('familias/edit', $familias->id) }}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-info" href="{{ url('familias/destroy', $familias->id) }}"><i class="fas fa-trash"></i></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $familia->links() }}
    </div>

@endsection

