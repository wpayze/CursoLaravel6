<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Estilos -->
    <style>
      .texto-blanco {
        color: #fff!important;
      }

      .bordes {
        border: 1px #000 solid;
      }

      .padding{
        padding: 1em;
      }

      .margen-arriba {
        margin: 1em 0;
      }
    </style>

  </head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">LIBROS_CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            {{-- <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="/libros">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/alquileres">Alquileres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/autores">Autores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/editoriales">Editoriales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lectores">Lectores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categorias">Categorias</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container" style="max-width: 1615px;">
        <br>
        @yield("content")
      </div>

      <script>
        
      </script>
    
</body>
</html>