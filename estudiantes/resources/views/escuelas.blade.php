@extends("layouts.master") 

@section ("titulo")
    Escuelas
@endsection

@section ("content")
    <h1>Escuelas</h1>

    @foreach ($escuelas as $escuela)
        <div style="border:1px solid #000; padding: 1em; margin: 1em 0;">
            <p>{{ $escuela->nombre }}</p>
            <p>{{ $escuela->celular }}</p>

            <h3>ESTUDIANTES DE {{ $escuela->nombre }}</h3>
            @foreach ($escuela->estudiantes as $estudiante)
                <ul>
                    <li>{{$estudiante->nombre}} {{$estudiante->apellido}} {{$estudiante->grado}}</li>
                </ul>
            @endforeach
        </div>
    @endforeach
@endsection