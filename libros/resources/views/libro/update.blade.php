@extends("layouts.master")

@section('title')
    Actualizar {{$libro->titulo}}
@endsection

@section('content')
    <h1>Actualizar {{$libro->titulo}}</h1>
    <br>

    @include("componentes.errores")

    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-12">
                <div class="form-group">
                    <strong>T&iacute;tulo: </strong>
                    <input value="{{$libro->titulo}}" name="titulo" type="text" class="form-control" placeholder="Titulo del libro....">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Descripci&oacute;n: </strong>
                    <textarea class="form-control" name="descripcion" cols="30" rows="10">{{$libro->descripcion}}</textarea>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Autor: </strong>
                    <select name="autor_id" class="form-control">
                        @foreach ($autores as $autor)
                            <option value="{{$autor->id}}" @if ($libro->autor->id == $autor->id) selected @endif >{{$autor->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Editorial: </strong>
                    <select name="editorial_id" class="form-control">
                        @foreach ($editoriales as $editorial)
                            <option value="{{$editorial->id}}" @if ($libro->editorial->id == $editorial->id) selected @endif >{{$editorial->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Categor&iacute;a: </strong>
                    <select name="categoria_id" class="form-control">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}" @if ($libro->categoria->id == $categoria->id) selected @endif >{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Idioma: </strong>
                    <select name="idioma" class="form-control">
                        @foreach ($idiomas as $idioma)
                            <option @if ($libro->idioma == $idioma) selected @endif value="{{$idioma}}">{{$idioma}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>Fecha de Lanzamiento: </strong>
                    <input value="{{$libro->fecha_lanzamiento}}" name="fecha_lanzamiento" type="date" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <strong>P&aacute;ginas: </strong>
                    <input value="{{$libro->paginas}}" name="paginas" type="number" min="1" class="form-control" placeholder="P&aacute;ginas del libro....">
                </div>
            </div>


            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <br><br>
        </div>
    </form>
@endsection