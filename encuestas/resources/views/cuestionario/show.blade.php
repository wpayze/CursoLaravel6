@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$cuestionario->titulo}}</div>

                <div class="card-body">

                    <a class="btn btn-primary" href="{{ route('cuestionarios.pregunta.create', $cuestionario->id) }}">Crear Pregunta</a>
                    <a class="btn btn-primary" href="/encuestas/{{$cuestionario->id}}-{{Str::slug($cuestionario->titulo)}}">Tomar Encuesta</a>
                    <hr>
                    {{$cuestionario->descripcion}}
                </div>
            </div>
            <br>

            <h2>Preguntas</h2>
            @foreach ($cuestionario->preguntas as $pregunta)
                <div class="card">
                    <div class="card-header">{{$pregunta->texto}}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($pregunta->respuestas as $respuesta)
                                <li class="list-group-item">{{$respuesta->texto}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
