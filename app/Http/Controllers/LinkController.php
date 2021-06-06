<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function index(){

        $links = Link::where('id','>',0)
                               ->latest('id')
                               ->get();
       
        return view('about.links', compact('links'));
    }
}
