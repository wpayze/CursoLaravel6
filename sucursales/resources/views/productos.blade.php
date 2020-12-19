@extends('layouts.app')

@section('content')
<div class="container">
    <h1>PRODUCTOS</h1>
    <br>
    

    <select>
      <option value="10" onclick="">10</option>
      <option value="10">15</option>
      <option value="10">20</option>
    </select>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Nombre</th>
            <th scope="col">Existencia</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->sucursal->nombre}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->existencia}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
          {{ $productos->links() }}
        </div>
      </div>
</div>
@endsection