@extends("layouts.master")

@section('title')
    Lectores
@endsection

@section('content')

    @include("componentes.creadoPerfectamente")

    <h1>&Iacute;ndice de Lectores</h1>

    <br>
        <a href="{{ route('lectores.create') }}" type="button" class="btn btn-success">CREAR</a>
    <br>
    <br>

    @if ( sizeof($lectores) > 0 )
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tel&eacute;fono</th>
                <th scope="col">Direcci&oacute;n</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($lectores as $lector)
            <tr>
                <th scope="row">{{ $lector->id }}</th>
                <td>{{$lector->nombre}}</td>
                <td>{{$lector->telefono}}</td>
                <td>{{$lector->direccion}}</td>
                <td>
                    <a href="{{ route('lectores.show', $lector->id) }}" type="button" class="btn btn-primary text-blanco">Ver</a>
                    <button type="button" class="btn btn-warning">Actualizar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen lectores todav&iacute;a...</p>
    @endif

    
@endsection