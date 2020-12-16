@extends("layouts.master")

@section('title')
    AUTORES
@endsection

@section('content')

    @include("componentes.notificaciones")
    <h1>&Iacute;ndice de Autores</h1>

    <br>
    <a href="{{ route('autores.create') }}" type="button" class="btn btn-success">CREAR</a>
    <br>
    <br>

    @if ( sizeof($autores) > 0 )
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($autores as $autor)
            <tr>
                <th scope="row">{{ $autor->id }}</th>
                <td>{{$autor->nombre}}</td>
                <td>{{$autor->fecha_nacimiento}}</td>
                <td>
                    <a href="{{ route('autores.show', $autor->id) }}" type="button" class="btn btn-primary texto-blanco" >Ver</a>
                    <a href="{{ route('autores.edit', $autor->id) }}" type="button" class="btn btn-warning">Actualizar</a>
                    <form action="{{ route('autores.destroy', $autor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" data-toggle="modal" onclick="abrirModal( this, '{{ $autor->nombre }}' )">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen autores todav&iacute;a...</p>
    @endif
    @include("componentes.modalBorrar")
@endsection