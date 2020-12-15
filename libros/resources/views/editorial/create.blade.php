@extends("layouts.master")

@section('title')
    Nuevo Editorial
@endsection

@section('content')
    <h1>Nuevo Editorial</h1>
    <br>
    
    @include("componentes.errores")

    <form action="{{ route('editoriales.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre del editorial...">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
@endsection