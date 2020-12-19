@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
        <form action="/contacto" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="nombre">Email</label>
                <input type="text" name="correo" class="form-control">
            </div>
            <div class="form-group">
                <label for="nombre">Mensaje</label>
                <input type="text" name="mensaje" class="form-control">
            </div>

            <button type="Submit" class="btn btn-primary">ENVIAR</button>
        </form>
    </div>
</div>

@endsection
