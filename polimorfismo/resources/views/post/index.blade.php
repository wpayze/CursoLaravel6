@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        @foreach ($posts as $post)
            <div class="col-12 post">
                <div class="row">
                    <div class="col-3">
                        @if ( isset($post->image) )
                            <img style="width:100%;" src="{{ $post->image->url }}" alt="">
                        @endif
                    </div>
                    <div class="col-9">
                        <h2 ><a style="color:#000!important" href="{{ route('post', $post->id) }}">{{ $post->title }}</a></h2>
                        <p>{{ $post->body}}</p>
                        <hr>
                        <p>{{ count($post->comments) }} comentarios</p>
                        <hr>
                        @foreach ($post->tags as $tag)
                            <span class="badge badge-success">{{$tag->name}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection

<style>
    .post{
        background: #fff;
        padding: 1em;
        margin: 0 0 1em 0;
        border-radius: 10px;
    }
</style>
