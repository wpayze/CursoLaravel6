@if ($mensaje = Session::get('exitoso'))
    <div class="alert alert-success">
        <p>{{ $mensaje }}</p>
    </div>
@endif