@extends("layouts.master")
    
@section('title')
    Libro - {{$libro->nombre}}
@endsection

@section('content')
    

    <h3>Libro: </h3>
    <div class="row bordes padding margen-arriba">
        <div class="col-6">
            <p><strong>Titulo:</strong> {{$libro->titulo}}</p>
            <p><strong>Autor:</strong> {{$libro->autor->nombre}}</p>
            <p><strong>Editorial:</strong> {{$libro->editorial->nombre}}</p>
            <p><strong>Categoria:</strong> {{$libro->categoria->nombre}}</p>
        </div>
        <div class="col-6">
            <p><strong>Descripci&oacute;n:</strong> {{$libro->descripcion}}</p>
            <p><strong>Fecha de Lanzamiento:</strong> {{$libro->fecha_lanzamiento}}</p>
            <p><strong>Idioma:</strong> {{$libro->idioma}}</p>
            <p><strong>P&aacute;ginas:</strong> {{$libro->paginas}}</p>
        </div>
    </div>

    <div class="row bordes padding margen-arriba">
        <div class="col-4">
            <h3>Autor:</h3>
            <p>{{$libro->autor->nombre}}</p>
            <p>{{$libro->autor->fecha_nacimiento}}</p>
        </div>
        <div class="col-4">
            <h3>Editorial:</h3>
            <p>{{$libro->editorial->nombre}}</p>
        </div>
        <div class="col-4">
            <h3>Categor&iacute;a:</h3>
            <p>{{$libro->categoria->nombre}}</p>
        </div>
    </div>

@endsection