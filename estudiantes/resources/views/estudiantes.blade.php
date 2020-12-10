@extends("layouts.master") 

@section ("titulo")
    Estudiantes
@endsection

@section ("content")
    <h1>Estudiantes</h1>

    @foreach ($estudiantes as $estudiante)
        <div style="border:1px solid #000; padding: 1em; margin: 1em 0;">
            <p> {{$estudiante->nombre}} {{$estudiante->apellido}} {{$estudiante->grado}} </p>

            <h3>Escuela de {{$estudiante->nombre}}</h3>
            <p>{{$estudiante->escuela->nombre}}</p>

            <h3>Clases de {{$estudiante->nombre}}</h3>
            @foreach($estudiante->clases as $clase)
            <ul>
                <li>{{$clase->nombre}}</li>
            </ul>
            @endforeach
        </div>
    @endforeach
    
@endsection