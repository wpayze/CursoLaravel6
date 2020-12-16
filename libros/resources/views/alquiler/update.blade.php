@extends("layouts.master")

@section('title')
    Actualizar el Alquiler {{$alquiler->id}}
@endsection

@section('content')
    <h1>Actualizar el Alquiler {{$alquiler->id}}</h1>
    <br>

    <form action="{{ route('alquileres.update', $alquiler->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Libro: </strong>
                    <select name="libro_id" class="form-control">
                        @foreach ($libros as $libro)
                            <option value="{{$libro->id}}" @if ($alquiler->libro->id == $libro->id) selected @endif >{{$libro->titulo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Lector: </strong>
                    <select name="lector_id" class="form-control">
                        @foreach ($lectores as $lector)
                            <option value="{{$lector->id}}" @if ($alquiler->lector->id == $lector->id) selected @endif >{{$lector->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Fecha de Entrada: </strong>
                    <input value="{{$alquiler->fecha_entrada}}" name="fecha_salida" type="date" class="form-control" placeholder="Fecha de entrada del alquiler....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Fecha de Salida: </strong>
                    <input value="{{$alquiler->fecha_salida}}" name="fecha_entrada" type="date" class="form-control" placeholder="Fecha de salida del alquiler....">
                </div>
            </div>
            
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection