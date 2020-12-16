@extends("layouts.master")

@section('title')
    Actualizar categor&iacute;a {{$categoria->nombre}}
@endsection

@section('content')
    <h1>Actualizar categor&iacute;a {{$categoria->nombre}}</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>

                    <input value="{{$categoria->nombre}}" name="nombre" type="text" class="form-control" placeholder="Nombre de la categor&iacute;a....">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-warning">Editar</button>
            </div>
        </div>

    </form>

@endsection