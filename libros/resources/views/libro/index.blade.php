@extends("layouts.master")

@section('title')
    LIBROS
@endsection

@section('content')

    @include("componentes.notificaciones")
    <h1>&Iacute;ndice de Libros</h1>

    <br>
    <a href="{{ route("libros.create") }}" type="button" class="btn btn-success">CREAR</a>
    <br>
    <br>

    @if ( sizeof($libros) > 0 )
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">T&iacute;tulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Categor&iacute;a</th>
                <th scope="col">Editorial</th>
                <th scope="col">Fecha de Lanzamiento</th>
                <th scope="col">Idioma</th>
                <th scope="col">P&aacute;ginas</th>
                <th scope="col">Descripci&oacute;n</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($libros as $libro)
            <tr>
                <th scope="row">{{ $libro->id }}</th>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor->nombre}}</td>
                <td>{{$libro->categoria->nombre}}</td>
                <td>{{$libro->editorial->nombre}}</td>
                <td>{{$libro->fecha_lanzamiento}}</td>
                <td>{{$libro->idioma}}</td>
                <td>{{$libro->paginas}}</td>
                <td>{{$libro->descripcion}}</td>
                <td>
                    <a href="{{ route('libros.show', $libro->id) }}" type="button" class="btn btn-primary texto-blanco" >Ver</a>
                    <a href="{{ route('libros.edit', $libro->id) }}" type="button" class="btn btn-warning">Actualizar</a>
                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" data-toggle="modal" onclick="abrirModal( this, '{{ $libro->titulo }}' )">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen libros todav&iacute;a...</p>
    @endif
    @include("componentes.modalBorrar")
@endsection