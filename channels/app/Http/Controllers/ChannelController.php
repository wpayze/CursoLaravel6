<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class ChannelController extends Controller
{
    public function index() {
        //$channels = Channel::orderBy("name")->get();
        return view("channel.index");
    }
}
