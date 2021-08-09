<?php

namespace App\Http\Controllers;

use App\Models\Huatulco;
use Illuminate\Http\Request;

class HuatulcoController extends Controller
{
    public function index(){
        $sections = Huatulco::all();
        return view ('about.huatulco',compact('sections'));
    }
}
