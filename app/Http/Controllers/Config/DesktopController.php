<?php

namespace App\Http\Controllers\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;

class DesktopController extends Controller 
{
    public function index(){

        $configs = Config::where('id','>' ,0)->latest('id')->paginate(5);


        return view ('config.index', compact('configs'));
    }
}
