<?php

namespace App\Observers;

use App\Models\Incentive;
use Illuminate\Support\Facades\Storage;

class IncentiveObserver
{

    public function creating(Incentive $incentive)
    {
        if(! \App::runningInConsole()){
            $incentive->user_id = auth()->user()->id;

        }
        
    }

    public function deleting(Incentive $incentive)
    {
        if($incentive->image){
            Storage::delete($incentive->image->url);

        }
    }
}
