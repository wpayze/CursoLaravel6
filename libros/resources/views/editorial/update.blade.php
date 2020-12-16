@extends("layouts.master")

@section('title')
    Actualizar el Editorial {{$editorial->nombre}}
@endsection

@section('content')
    <h1>Actualizar el Editorial {{$editorial->nombre}}</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('editoriales.update', $editorial->id) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Nombre: </strong>
                    <input value="{{$editorial->nombre}}" name="nombre" type="text" class="form-control" placeholder="Nombre del editorial...">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
@endsection