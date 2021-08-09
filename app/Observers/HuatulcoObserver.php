<?php

namespace App\Observers;

use App\Models\Huatulco;
use Illuminate\Support\Facades\Storage;

class HuatulcoObserver
{
    public function deleting(Huatulco $huatulco)
    {
        if($huatulco->image){
            Storage::delete($huatulco->image->url);

        }
    }
}
