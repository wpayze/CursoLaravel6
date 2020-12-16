@extends("layouts.master")

@section('title')
    Editoriales
@endsection

@section('content')

    @include("componentes.notificaciones")
    
    <h1>&Iacute;ndice de Editoriales</h1>

    <br>
    <a href="{{route('editoriales.create')}}" type="button" class="btn btn-success">CREAR</a>
    <br>
    <br>

    @if ( sizeof($editoriales) > 0 )
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($editoriales as $editorial)
            <tr>
                <th scope="row">{{ $editorial->id }}</th>
                <td>{{$editorial->nombre}}</td>
                <td>
                    <a href="{{ route('editoriales.show', $editorial->id) }}" type="button" class="btn btn-primary texto-blanco" >Ver</a>
                    <a href="{{ route('editoriales.edit', $editorial->id) }}" type="button" class="btn btn-warning">Actualizar</a>
                    <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" data-toggle="modal" onclick="abrirModal( this, '{{ $editorial->nombre }}' )">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen editoriales todav&iacute;a...</p>
    @endif

    @include("componentes.modalBorrar")

@endsection