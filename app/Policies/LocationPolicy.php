<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Location;

class LocationPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    
    


    public function published(?User $user, Location $location){
        if($location->status == 2){
            return true;
        }else{
            return false;
        }

    }
}
