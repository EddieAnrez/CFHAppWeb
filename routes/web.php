<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Config\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\IncentiveController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HuatulcoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegulationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [WelcomeController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('dashboard');
})->name('home');


//Nosotros
Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/links',[LinkController::class,'index'])->name('links'); 

Route::get('/huatulco',[HuatulcoController::class,'index'])->name('huatulco'); 



//Locaciones

Route::get('/locations',[LocationController::class,'index'])->name('location.index');

Route::get('/locations/{location}', [LocationController::class, 'show'])->name('location.show');

Route::get('/map', [MapController::class, 'index'])->name('map');

//Videos

Route::get('/videos', [VideoController::class, 'index'])->name('videos');

//Servicios

Route::get('/services', [ServiceController::class, 'index'])->name('services');

//Produccion

Route::get('/covid', function () { return view('production.covid');
})->name('covid');

Route::get('/regulations',[RegulationController::class,'index'])->name('regulations'); 

Route::get('/permissions',[PermissionController::class,'index'])->name('permissions'); 

Route::get('/incentives',[IncentiveController::class,'index'])->name('incentives'); 


//Blog

Route::get('/blog',[BlogController::class,'index'])->name('blog.index');

Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');

Route::get('blog/category/{category}',[BlogController::class,'category'])->name('blog.category');

Route::get('blog/tag/{tag}', [BlogController::class,'tag'])->name('blog.tag');

Route::get('/category/{category}', [BlogController::class, 'category'])->name('blog.category');

//Radio

Route::get('/live',[LiveController::class,'index'])->name('live');

//Contacto

Route::resource('/contact',ContactController::class)->names('contact'); 









