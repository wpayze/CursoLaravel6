<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield("title") </title>
</head>
<body>
    
    <ul>
        <li><a href="/homeFactura">INDEX</a></li>
        <li><a href="/acercaFactura">ACERCA</a></li>
        <li><a href="/facturas">FACTURAS</a></li>
    </ul>

    @yield("content")

</body>
</html>