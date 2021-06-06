<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::where('status',2)->latest('id')->paginate(10);
        return view('videos', compact('videos'));

    }
}
