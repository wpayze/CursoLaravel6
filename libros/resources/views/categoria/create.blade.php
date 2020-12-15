@extends("layouts.master")

@section('title')
    Nueva Categor&iacute;a
@endsection

@section('content')
    <h1>Crear nueva categor&iacute;a</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre de la categor&iacute;a....">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection