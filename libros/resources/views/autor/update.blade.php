@extends("layouts.master")

@section('title')
    Actualizar al autor {{$autor->nombre}}
@endsection

@section('content')
    <h1>Actualizar al autor {{$autor->nombre}}</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>
                    <input value="{{$autor->nombre}}" name="nombre" type="text" class="form-control" placeholder="Nombre del autor....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Fecha de Nacimiento: </strong>
                    <input value="{{$autor->fecha_nacimiento}}" name="fecha_nacimiento" type="date" class="form-control" placeholder="Fecha de nacimiento del autor....">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>

@endsection