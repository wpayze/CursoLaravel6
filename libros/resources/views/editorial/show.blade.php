@extends("layouts.master")
    
@section('title')
    Editorial - {{$editorial->nombre}}
@endsection

@section('content')
    
    <h1>Editorial - {{$editorial->nombre}}</h1>
    
    <br>
    <h3>Libros del Editorial {{$editorial->nombre}}</h3>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">T&iacute;tulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Categor&iacute;a</th>
            <th scope="col">Fecha de Lanzamiento</th>
            <th scope="col">Idioma</th>
            <th scope="col">P&aacute;ginas</th>
            <th scope="col">Descripci&oacute;n</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($editorial->libros as $libro)
        <tr>
            <th scope="row">{{ $libro->id }}</th>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autor->nombre}}</td>
            <td>{{$libro->categoria->nombre}}</td>
            <td>{{$libro->fecha_lanzamiento}}</td>
            <td>{{$libro->idioma}}</td>
            <td>{{$libro->paginas}}</td>
            <td>{{$libro->descripcion}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection