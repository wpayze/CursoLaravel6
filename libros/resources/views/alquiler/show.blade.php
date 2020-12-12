@extends("layouts.master")
    
@section('title')
    Alquiler {{$alquiler->id}}
@endsection

@section('content')
    <h1>Alquiler {{$alquiler->id}}</h1>
<br>
    <div class="row">
        <div class="col-6">
            <div>
                <h3>Lector: </h3>
        
                <p>{{$alquiler->lector->nombre}}</p>
                <p>{{$alquiler->lector->telefono}}</p>
                <p>{{$alquiler->lector->direccion}}</p>
            </div>
        </div>
        <div class="col-6">
            <div>
                <h3>Libro: </h3>
                <p><strong>Titulo:</strong> {{$alquiler->libro->titulo}}</p>
                <p><strong>Autor:</strong> {{$alquiler->libro->autor->nombre}}</p>
                <p><strong>Editorial:</strong> {{$alquiler->libro->editorial->nombre}}</p>
                <p><strong>Categoria:</strong> {{$alquiler->libro->categoria->nombre}}</p>
                <p><strong>Descripci&oacute;n:</strong> {{$alquiler->libro->descripcion}}</p>
                <p><strong>Fecha de Lanzamiento:</strong> {{$alquiler->libro->fecha_lanzamiento}}</p>
                <p><strong>Idioma:</strong> {{$alquiler->libro->idioma}}</p>
                <p><strong>P&aacute;ginas:</strong> {{$alquiler->libro->paginas}}</p>
            </div>
        </div>
    </div>

@endsection