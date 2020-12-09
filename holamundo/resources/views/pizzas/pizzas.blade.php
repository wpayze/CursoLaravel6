<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX DE PIZZAS</title>
</head>
<body>
    
    <h1>PIZZAS</h1>

    @foreach ( $pizzas as $pizza )

        <p>{{ $pizza->tipo }}</p>
    
    @endforeach
    
</body>
</html>