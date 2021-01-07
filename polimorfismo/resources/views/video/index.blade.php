@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        @foreach ($videos as $video)
            <div class="col-12 post">
                <div class="row">
                    <div class="col-3">
                        @if ( isset($video->image->url) )
                            <img style="width:100%;" src="{{ $video->image->url }}" alt="">
                        @endif
                    </div>
                    <div class="col-9">
                        <h2 ><a style="color:#000!important" href="{{ route('video', $video->id) }}">{{ $video->title }}</a></h2>
                        <p>{{ $video->body}}</p>
                        <hr>
                        <p>{{ count($video->comments) }} comentarios</p>
                        <hr>
                        @foreach ($video->tags as $tag)
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
