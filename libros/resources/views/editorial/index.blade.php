@extends("layouts.master")

@section('title')
    Editoriales
@endsection

@section('content')
    <h1>&Iacute;ndice de Editoriales</h1>

    <br>
    <button type="button" class="btn btn-success">CREAR</button>
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
                    <button type="button" class="btn btn-warning">Actualizar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    @else
        <p>No existen editoriales todav&iacute;a...</p>
    @endif

@endsection