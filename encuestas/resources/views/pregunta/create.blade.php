@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva pregunta para {{$cuestionario->titulo}}</div>

                <div class="card-body">
                    <form action="{{route('cuestionarios.pregunta.store', $cuestionario->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="texto">Pregunta</label>
                            <input type="text" name="pregunta[texto]" value="{{old('pregunta.texto')}}" class="form-control" id="texto" aria-describedby="textoHelp" placeholder="Texto de la pregunta">

                            @error ("pregunta.texto")
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Opciones</legend>

                                <div class="form-group">
                                    <label for="respuesta1">Respuesta 1</label>
                                    <input type="text" name="respuestas[][texto]" value="{{old('respuestas.0.texto')}}" id="respuesta1" class="form-control" placeholder="Respuesta 1">

                                    @error ("respuestas.0.texto")
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="respuesta2">Respuesta 2</label>
                                    <input type="text" name="respuestas[][texto]" value="{{old('respuestas.1.texto')}}" id="respuesta2" class="form-control" placeholder="Respuesta 2">

                                    @error ("respuestas.1.texto")
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="respuesta3">Respuesta 3</label>
                                    <input type="text" name="respuestas[][texto]" value="{{old('respuestas.2.texto')}}" id="respuesta3" class="form-control" placeholder="Respuesta 3">

                                    @error ("respuestas.2.texto")
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="respuesta4">Respuesta 4</label>
                                    <input type="text" name="respuestas[][texto]" value="{{old('respuestas.3.texto')}}" id="respuesta4" class="form-control" placeholder="Respuesta 4">

                                    @error ("respuestas.3.texto")
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Pregunta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
