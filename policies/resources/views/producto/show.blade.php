@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$producto->nombre}}</h1>
    <br>
    <p>{{$producto->precio}}</p>
    <p>{{$producto->categoria}}</p>
    <p>{{$producto->activo}}</p>

    @can('delete', $producto)
        <form action="{{route('productodelete', $producto->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">BORRAR</button>
        </form>
    @endcan

</div>
@endsection
