@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{$cuestionario->titulo}}</h1>

            <form action="/encuestas/{{$cuestionario->id}}-{{Str::slug($cuestionario->titulo)}}" method="POST">
                @csrf

                @foreach ($cuestionario->preguntas as $key => $pregunta)
                    <div class="card">
                        <div class="card-header"> <strong>{{$key + 1 }}.</strong> {{$pregunta->texto}}</div>

                        <div class="card-body">

                            @error("responses.".$key.".respuesta_id")
                                <small class="text-danger">{{$message}}</small>
                            @enderror

                            <ul class="list-group">
                                @foreach ($pregunta->respuestas as $respuesta)
                                <label for="respuesta{{$respuesta->id}}">
                                    <li class="list-group-item">
                                        <input type="radio" name="responses[{{$key}}][respuesta_id]"
                                        {{ (old("responses.".$key.".respuesta_id") == $respuesta->id ) ? "checked" : ""  }}
                                        id="respuesta{{$respuesta->id}}" class="mr-2" value="{{$respuesta->id}}">
                                        {{$respuesta->texto}}

                                        <input type="hidden" name="responses[{{$key}}][pregunta_id]" value="{{$pregunta->id}}">
                                    </li>
                                </label>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
                <br>

                <div class="card">
                    <div class="card-header">Informacion del Usuario</div>

                    <div class="card-body">

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" value="{{old('encuesta.nombre')}}" name="encuesta[nombre]" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Tu nombre">
                            @error("encuesta.nombre")
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="{{old('encuesta.email')}}" name="encuesta[email]" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Tu nombre">
                            @error("encuesta.email")
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Completar Encuesta</button>
            </form>
        </div>
    </div>
</div>
@endsection
