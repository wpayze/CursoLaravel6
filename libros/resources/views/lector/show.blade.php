@extends("layouts.master")
    
@section('title')
    Lector - {{$lector->nombre}}
@endsection

@section('content')

    <div class="row">
        <div class="col-3">
            <img src="https://static3.abc.es/Media/201504/23/libros--644x362.jpg" alt="" style="width:100%;">
        </div>
        <div class="col-9">
            <h2>Informaci&oacute;n Personal</h2>

            <p>{{$lector->nombre}}</p>
            <p>{{$lector->telefono}}</p>
            <p>{{$lector->direccion}}</p>
        </div>
    </div>
    <br>
    <h2>Alquileres que ha realizado {{$lector->nombre}}</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Libro</th>
            <th scope="col">Fecha de Salida</th>
            <th scope="col">Fecha de Entrada</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($lector->alquileres as $alquiler)
        <tr>
            <th scope="row">{{ $alquiler->id }}</th>
            <td>{{$alquiler->libro->titulo}}</td>
            <td>{{$alquiler->fecha_salida}}</td>
            <td>{{$alquiler->fecha_entrada}}</td>
        </tr>
        @endforeach
        </tbody>
    </table> 
    
@endsection