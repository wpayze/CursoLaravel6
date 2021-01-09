@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos</h1>

    @can('create', \App\Producto::class)
        <a class="btn btn-primary" href="{{route('productocreate')}}">Crear Nuevo Producto</a>
    @endcan

    <hr>

    <h2>Busqueda con Query Builder</h2><br>
    <form>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <input class="form-control" type="search" name="filter[nombre]" placeholder="nombre...">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <input class="form-control" type="search" name="filter[precio]" placeholder="precio...">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <input class="form-control" type="search" name="filter[categoria]" placeholder="categoria...">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="paginacion">Numero de Registros</label>
                    <select name="paginacion" class="form-control">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="paginacion">ID</label>
                    <input class="form-control" type="search" name="filter[id]" placeholder="id...">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="paginacion">Estado</label>
                    <select name="estado" class="form-control">
                        <option value="">Todos</option>
                        <option value="active">Activos</option>
                        <option value="inactive">Inactivos</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">BUSCAR</button>
            </div>
        </div>
    </form>

    <hr>

    <h2>Busqueda con Eloquent</h2><br>
    <form>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input class="form-control" type="search" name="search" placeholder="nombre categoria o precio...">
                </div>
            </div>
            <div class="col-6"></div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">BUSCAR</button>
            </div>
        </div>
    </form>


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

@endsection
