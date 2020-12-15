@extends("layouts.master")

@section('title')
    Nuevo Autor
@endsection

@section('content')
    
    <h1>Nuevo Autor</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre del autor....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Fecha de Nacimiento: </strong>
                    <input name="fecha_nacimiento" type="date" class="form-control" placeholder="Fecha de nacimiento del autor....">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>

@endsection