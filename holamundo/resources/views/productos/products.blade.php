<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCTOS</title>
</head>
<body>
    <ul>
        <li><a href="/home">HOME</a></li>
        <li><a href="/acerca">ACERCA</a></li>
        <li><a href="/productos">PRODUCTOS</a></li>
    </ul>

    <h1>LISTA DE PRODUCTOS:</h1>

    <ul>
    @foreach ( $productos as $producto )

        @if ( $producto["precio"] > 1000 )
            <div style="border: 1px solid #ccc; padding: 1em; margin: 1em 0;">
                <p> {{ $producto["id"] }} </p>
                <p> {{ $producto["nombre"] }} </p>
                <p> {{ $producto["precio"] }} </p>
            </div>
        @else
            <p>Este producto ({{ $producto["nombre"] }}), no vale mas de 1000.</p>
        @endif
    @endforeach

    @foreach ( $productos as $producto )
        @switch ( $producto["id"] )

            @case (1)
                <p>ESTE ES EL PRIMER PRODUCTO</p>
            @break

            @case (2)
                <p>ESTE ES EL SEGUNDO PRODUCTO</p>
            @break

            @default
                <p>ESTE ES CUALQUIER OTRO PRODUCTO</p>
            @break

        @endswitch
    @endforeach

    @for ( $i = 1; $i <= 10; $i ++)
        <p> {{$i}} </p>
    @endfor
    
    </ul>

</body>
</html>