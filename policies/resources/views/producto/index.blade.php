@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos</h1>

    @can('create', \App\Producto::class)
        <a class="btn btn-primary" href="{{route('productocreate')}}">Crear Nuevo Producto</a>
    @endcan

    <hr>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input class="form-control" type="text" id="nombre" placeholder="nombre...">
            </div>
        </div>
        <div class="col-6"></div>
        <div class="col-12">
            <button class="btn btn-primary" onclick="filtrar()">BUSCAR</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $productos->links() }}
        </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Categor&iacute;a</th>
            <th scope="col">Activo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>
                        @can('view', $producto)
                            <a href="{{route('producto', $producto->id)}}">{{$producto->nombre}}</a>
                        @endcan

                        @cannot('view', $producto)
                            {{$producto->nombre}}
                        @endcannot
                    </td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->categoria}}</td>
                    <td>{{$producto->activo == 1 ? "SI" : "NO"}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

      <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $productos->links() }}
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // function filtrar() {
    //     var nombre = document.getElementById("nombre").value;

    //     let url = new URL( window.location.href );
    //     let params = new URLSearchParams(url.search);

    //     params.delete('filter[nombre]');

    //     window.location.search += 'filter[nombre]=' + nombre;
    // }
</script>
@endsection
