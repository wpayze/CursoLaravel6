@extends("layouts.master")
    
@section('title')
    Autor - {{$autor->nombre}}
@endsection

@section('content')
    <div class="row">
        <div class="col-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Der_Autor.jpg" alt="" style="width:100%;">
        </div>
        <div class="col-9">
            <h2>Informaci&oacute;n Personal</h2>

            <p>{{$autor->nombre}}</p>
            <p>{{$autor->fecha_nacimiento}}</p>
        </div>
    </div>
    <br>
    <h3>Libros de {{$autor->nombre}}</h3>
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
        </tr>
        </thead>
        <tbody>

        @foreach ($autor->libros as $libro)
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
        </tr>
        @endforeach
        </tbody>
    </table> 
@endsection