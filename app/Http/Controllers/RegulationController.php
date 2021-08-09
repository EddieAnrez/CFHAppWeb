<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regulation;

class RegulationController extends Controller
{
    public function index(){
        $regulations= Regulation::where('id','>',0)->latest('id')->paginate(6);
        return view ('production.regulations', compact('regulations'));
    }
}
