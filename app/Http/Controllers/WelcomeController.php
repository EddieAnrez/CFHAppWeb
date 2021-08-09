<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Location;
use Illuminate\Http\Request;
use Bioudi\LaravelMetaWeatherApi\Weather;
use Illuminate\Support\Facades\Http;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index(){
        $data = Http::get('http://api.openweathermap.org/data/2.5/weather?lat=15.8436&lon=-96.3267&appid=61e7dde1d463ac25a4d7e1a0fdaa2dc8');
        $weather = $data ->json();

        $posts = Post::where('status', 2)->latest('id')->take(4)->get();

        $locations = Location::where('status', 2)->latest('id')->take(3)->get();

        $about = About::all();

        return view('welcome', compact('weather', 'posts', 'locations','about'));

    }
}
