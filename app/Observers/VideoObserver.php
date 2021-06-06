<?php

namespace App\Observers;
use App\Models\Video;

class VideoObserver
{
    public function creating(Video $video){
        if(!\App::runningInConsole()){
            $video->user_id = auth()->user()->id;

        }
        

    }
}
