<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Live;

class LiveController extends Controller
{
   
    
    public function index(){
        $live = Live::all();
        return view('live',compact('live'));
    }

    
}
