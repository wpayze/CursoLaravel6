@extends("layouts.master")

@section('title')
    Nuevo Lector
@endsection

@section('content')
    
    <h1>Nuevo Lector</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('lectores.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre del lector....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Tel&eacute;fono: </strong>
                    <input name="telefono" type="text" class="form-control" placeholder="Tel&eacute;fono del lector....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Direcci&oacute;n: </strong>
                    <input name="direccion" type="text" class="form-control" placeholder="Direcci&oacute;n del lector....">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>

@endsection