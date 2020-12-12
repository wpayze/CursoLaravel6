@extends("layouts.master")

@section('title')
    ALQUILERES
@endsection

@section('content')
    <h1>&Iacute;ndice de Alquileres</h1>

    <br>
    <button type="button" class="btn btn-success">CREAR</button>
    <br>
    <br>

    @if ( sizeof($alquileres) > 0 )
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Libro</th>
                <th scope="col">Lector</th>
                <th scope="col">Fecha de Salida</th>
                <th scope="col">Fecha de Entrada</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($alquileres as $alquiler)
            <tr>
                <th scope="row">{{ $alquiler->id }}</th>
                <td>{{$alquiler->libro->titulo}}</td>
                <td>{{$alquiler->lector->nombre}}</td>
                <td>{{$alquiler->fecha_salida}}</td>
                <td>{{$alquiler->fecha_entrada}}</td>
                <td>
                    <a href="{{ route('alquileres.show', $alquiler->id) }}" type="button" class="btn btn-primary texto-blanco" >Ver</a>
                    <button type="button" class="btn btn-warning">Actualizar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen alquileres todav&iacute;a...</p>
    @endif

@endsection