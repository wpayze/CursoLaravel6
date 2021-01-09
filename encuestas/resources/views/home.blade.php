@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('cuestionarios.create')}}">Crear Cuestionario</a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Cuestionarios</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($cuestionarios as $cuestionario)
                            <li class="list-group-item">
                                <a href="{{route('cuestionarios.show', $cuestionario->id)}}">{{$cuestionario->titulo}}</a>
                                <div class="mt-2">
                                    <small>Compartir URL:</small>
                                    <p>
                                        <a href="/encuestas/{{$cuestionario->id}}-{{Str::slug($cuestionario->titulo)}}">
                                            {{ url("/encuestas/".$cuestionario->id."-".Str::slug($cuestionario->titulo) ) }}
                                        </a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
