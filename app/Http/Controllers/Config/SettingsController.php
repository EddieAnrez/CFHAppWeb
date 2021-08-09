<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use App\Models\Live;
use Illuminate\Http\Request;
use App\Models\About;


class SettingsController extends Controller
{
    public function index()
    {
        $about = About::where('id',1)->get();
        $live = Live::where('id',1)->get();
        return view('config.settings', compact('about','live'));     
    }

}
