@extends("layouts.master") 

@section ("titulo")
    Clases
@endsection

@section ("content")
    <h1>Clases</h1>

    @foreach ($clases as $clase)
    <div style="border:1px solid #000; padding: 1em; margin: 1em 0;">
        <p>{{ $clase->nombre }}</p>

        <h3>ESTUDIANTES DE {{ $clase->nombre }}</h3>
        @foreach ($clase->estudiantes as $estudiante)
            <ul>
                <li>{{$estudiante->nombre}} {{$estudiante->apellido}} {{$estudiante->grado}}</li>
            </ul>
        @endforeach
    </div>
    @endforeach
@endsection