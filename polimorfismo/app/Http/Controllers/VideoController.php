<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::all();
        return view("video.index", compact("videos") );
    }

    public function show($id) {
        $video = Video::find($id);
        return view("video.show", compact('video'));
    }

    public function agregarComentario() {

    }
}
