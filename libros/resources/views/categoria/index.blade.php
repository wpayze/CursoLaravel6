@extends("layouts.master")

@section('title')
    CATEGORIAS
@endsection

@section('content')
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

                    <button type="button" class="btn btn-warning">Actualizar</button>

                    <button type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen categorias todav&iacute;a...</p>
    @endif

@endsection