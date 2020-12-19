@component('mail::message')
# Nuevo Mensaje del Formulario de Contacto
<br>

<strong>Nombre: </strong> {{ $datos['nombre'] }} <br>
<strong>Correo: </strong> {{ $datos['correo'] }} <br>
<strong>Mensaje: </strong> {{ $datos['mensaje'] }} <br>

<img src="https://s.france24.com/media/display/8c13820c-5b0e-11e9-bf90-005056a964fe/w:1280/p:4x3/gato.jpg">

@endcomponent
