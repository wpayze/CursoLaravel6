@extends("layouts.master")

@section('title')
    Actualizar al Lector {{$lector->nombre}}
@endsection

@section('content')
    <h1>Actualizar al Lector {{$lector->nombre}}</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('lectores.update', $lector->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>
                    <input value="{{$lector->nombre}}" name="nombre" type="text" class="form-control" placeholder="Nombre del lector....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Tel&eacute;fono: </strong>
                    <input value="{{$lector->telefono}}" name="telefono" type="text" class="form-control" placeholder="Tel&eacute;fono del lector....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Direcci&oacute;n: </strong>
                    <input value="{{$lector->direccion}}" name="direccion" type="text" class="form-control" placeholder="Direcci&oacute;n del lector....">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>

@endsection