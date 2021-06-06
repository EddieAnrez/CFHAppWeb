<?php

namespace App\Http\Controllers;

use App\Models\ImageIncentive;
use App\Models\Incentive;
use Illuminate\Http\Request;


class IncentiveController extends Controller
{
    public function index(){

        $incentives = Incentive::where('id','>',0)
                               ->latest('id')
                               ->get();
        $images = ImageIncentive::all();
        
        
       
        return view('production.incentives', compact('incentives','images'));
    }
}
