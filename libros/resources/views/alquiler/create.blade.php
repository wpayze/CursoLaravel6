@extends("layouts.master")

@section('title')
    Nuevo Alquiler
@endsection

@section('content')
    <h1>Nuevo Alquiler</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('alquileres.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Libro: </strong>
                    <select name="libro_id" class="form-control">
                        @foreach ($libros as $libro)
                            <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Lector: </strong>
                    <select name="lector_id" class="form-control">
                        @foreach ($lectores as $lector)
                            <option value="{{$lector->id}}">{{$lector->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Fecha de Entrada: </strong>
                    <input name="fecha_salida" type="date" class="form-control" placeholder="Fecha de entrada del alquiler....">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Fecha de Salida: </strong>
                    <input name="fecha_entrada" type="date" class="form-control" placeholder="Fecha de salida del alquiler....">
                </div>
            </div>
            
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
    
@endsection