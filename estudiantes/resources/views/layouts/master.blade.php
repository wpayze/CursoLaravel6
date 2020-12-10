<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
</head>
<body>

    <ul>
        <li><a href="/estudiantes">Estudiantes</a></li>
        <li><a href="/escuelas">Escuelas</a></li>
        <li><a href="/clases">Clases</a></li>
    </ul>

    @yield("content")
</body>
</html>