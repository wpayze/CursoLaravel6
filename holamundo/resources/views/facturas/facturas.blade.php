@extends ("facturas.facturasMaster")

@section ("title")
    FACTURAS
@endsection

@section ("content")

    <h1>FACTURAS</h1>

    @foreach ( $facturas as $factura )

        <div style="border: 1px solid #000; padding: 1em; margin: 1em 0;">
            <p>{{ $factura["id"] }}</p>
            <p>{{ $factura["correlativo"] }}</p>
            <p>{{ $factura["total"] }}</p>
        </div>

    @endforeach

@endsection