@extends('layouts.app')

@section('content')
    <h1>CLIENTES</h1>
    <br>

    <div class="row">
        <div class="col-6">
            <H3>ACTIVOS</H3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Activo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clientesActivos as $cliente)
                    <tr>
                        <td scope="row">{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->edad}}</td>
                        <td>{{$cliente->activo}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-6">
            <h3>INACTIVOS</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Activo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clientesInactivos as $cliente)
                    <tr>
                        <td scope="row">{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->edad}}</td>
                        <td>{{$cliente->activo}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <H3>MAYORES</H3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Activo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clientesMayores as $cliente)
                    <tr>
                        <td scope="row">{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->edad}}</td>
                        <td>{{$cliente->activo}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-6">
            <h3>MENORES</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Activo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clientesMenores as $cliente)
                    <tr>
                        <td scope="row">{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->edad}}</td>
                        <td>{{$cliente->activo}}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

@endsection