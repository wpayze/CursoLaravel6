@if ($mensaje = Session::get('exitoso'))
    <div class="alert alert-success">
        <p>{{ $mensaje }}</p>
    </div>
@endif

@if ( $titulo = Session::get('fallido') )
    <div class="alert alert-warning">
        <h5>{{$titulo}}</h5>
        <ul>
        @if (Session::get("mensajes"))
            @foreach (Session::get("mensajes") as $mensaje)
                <li>{{$mensaje}}</li>
            @endforeach
        @endif
        
        </ul>
    </div>
@endif