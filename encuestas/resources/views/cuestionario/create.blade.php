@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear un nuevo cuestionario</div>

                <div class="card-body">
                    <form action="{{route('cuestionarios.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">T&iacute;tulo</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" aria-describedby="tituloHelp" placeholder="T&iacute;tulo del cuestionario">
                            <small id="titulolHelp" class="form-text text-muted">Escr&iacute;be un t&iacute;tulo que llame la atenci&oacute;n.</small>

                            @error ("titulo")
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripci&oacute;n</label>
                            <input type="text" name="descripcion" class="form-control" id="descripcion" aria-describedby="descripcionHelp" placeholder="Descripci&oacute;n del cuestionario">
                            <small id="descripcionlHelp" class="form-text text-muted">Describe porque la gente deber&iacute;a tomar tu cuestionario.</small>

                            @error ("descripcion")
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Cuestionario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
