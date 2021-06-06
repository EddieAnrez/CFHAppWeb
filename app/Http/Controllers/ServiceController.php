<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /* public $subcategory;
    public $category;
    public $name; 

    public function index(){
        $services = Service::where('id','>', 2)->latest('id')->paginate(10);
        $subcategories = ServiceSubCategory::all();
        $categories = ServiceCategory::all();
        return view('services', compact('services','subcategories','categories'));
    } */

    public function index(){
        return view( 'services');

    }

   
    
}
