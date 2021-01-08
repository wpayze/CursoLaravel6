@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear un Producto</h1>

        <form action="{{ route('productostore') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-12">
                    <div class="form-group">
                        <strong>Nombre: </strong>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre del producto....">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <strong>Precio: </strong>
                        <input name="precio" type="text" class="form-control" placeholder="Precio del producto....">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <strong>Categoria: </strong>
                        <input name="categoria" type="text" class="form-control" placeholder="Categoria del producto....">
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>

    </div>
@endsection
