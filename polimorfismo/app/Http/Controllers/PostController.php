<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view("post.index", compact("posts"));
    }

    public function show($id) {
        $post = Post::find($id);
        return view("post.show", compact("post"));
    }

    public function agregarComentario(Request $request) {
        $data = $request->validate([
            "body" => "required",
            "id" => "required"
        ]);

        $body = $data["body"];
        $id = $data["id"];

        $video = Post::find($id);
        $video->comments()->create(["body"=> $body ]);

        return redirect("/posts/" . $id);
    }
}
