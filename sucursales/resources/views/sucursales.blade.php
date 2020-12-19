@extends('layouts.app')

@section('content')
<div class="container">
    <h1>SUCURSALES</h1>
    <br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sucursales as $sucursal)
            <tr>
                <td>{{$sucursal->id}}</td>
                <td>{{$sucursal->nombre}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection