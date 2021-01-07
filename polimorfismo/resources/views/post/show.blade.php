@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <hr>

        <!-- Date/Time -->
        <p>Escrito el {{ $post->created_at }}</p>

        <hr>

        <!-- Preview Image -->
        @if (isset($post->image->url))
            <img class="img-fluid rounded" src="{{$post->image->url}}" alt="">
        @endif


        <hr>

        <!-- Post Content -->
        <p class="lead">{{$post->body}}</p>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
            <h5 class="card-header">Dejar un Comentario:</h5>
            <div class="card-body">
              <form action="{{route('comentariopost')}}" method="POST">
                  @csrf
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="body"></textarea>
                </div>
                <input type="hidden" value="{{$post->id}}" name="id">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

        <!-- Single Comment -->


        @foreach ($post->comments as $comment)
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                <h5 class="mt-0">Usuario</h5>
                <p>{{$comment->body}}</p>
                </div>
            </div>
        @endforeach

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Etiquetas</h5>
          <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @foreach ($post->tags as $tag)
                        <span style="font-size:15px" class="badge badge-success">{{$tag->name}}</span>
                    @endforeach
                </div>
            </div>
          </div>
        </div>

        <div class="card my-4">
            <h5 class="card-header">Agregar Etiqueta:</h5>
            <div class="card-body">
              <form action="" method="POST">
                  @csrf
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          @if (!isset($post->image->url))
          <div class="card my-4">
            <h5 class="card-header">Agregar Imagen:</h5>
            <div class="card-body">
              <form action="" method="POST">
                  @csrf
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          @endif
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
