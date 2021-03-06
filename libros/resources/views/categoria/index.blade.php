@extends("layouts.master")

@section('title')
    CATEGORIAS
@endsection

@section('content')

@include("componentes.notificaciones")

    <h1>&Iacute;ndice de Categor&iacute;as</h1>

    <br>
    <a href="{{ route('categorias.create') }}" type="button" class="btn btn-success">CREAR</a>
    <br>
    <br>

    @if ( sizeof($categorias) > 0 )
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($categorias as $categoria)
            <tr>
                <th scope="row">{{ $categoria->id }}</th>
                <td>{{$categoria->nombre}}</td>
                <td>
                    <a href="{{ route('categorias.show', $categoria) }}" type="button" class="btn btn-primary texto-blanco" >Ver</a>

                    <a href="{{ route('categorias.edit', $categoria->id) }}" type="button" class="btn btn-warning">Actualizar</a>

                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" data-toggle="modal" onclick="abrirModal( this, '{{ $categoria->nombre }}' )">
                            Borrar
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen categorias todav&iacute;a...</p>
    @endif

    @include("componentes.modalBorrar")

@endsection
