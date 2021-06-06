<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Category_L;
use App\Models\ImageLocation;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public $idCategory;
    public $idArea;
    public $idLocation;


    public function updatingSearch(){
        $this->resetPage();
    }



    public function index(){
       
        return view ('location.index');

       
    }


    public function show(Location $location){
        $this->authorize('published', $location);
         /* $similares = Post::where('category_id', $post->category_id)
                                    ->where('status',2)
                                    ->where('id', '!=',$post->id)
                                    ->latest('id')
                                    ->take(5)
                                    ->get(); */
        $images = ImageLocation::where('imageable_id',$location->id)->latest('id')->take(5)->get();

        return view('location.show', compact('location','images')); 
    }
}
