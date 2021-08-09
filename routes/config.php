<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Config\DesktopController;
use App\Http\Controllers\config\CategoryController;
use App\Http\Controllers\Config\TagController;
use App\Http\Controllers\Config\PostController;
use App\Http\Controllers\Config\UserController;
use App\Http\Controllers\Config\RoleController;
use App\Http\Controllers\config\LocationController;
use App\Http\Controllers\config\ContactController;
use App\Http\Controllers\Config\VideoController;
use App\Http\Controllers\Config\ServiceController;
use App\Http\Controllers\Config\CategoryServiceController;
use App\Http\Controllers\Config\SubCategoryServiceController;
use App\Http\Controllers\config\ConfigController;
use App\Http\Controllers\config\AreaController;
use App\Http\Controllers\config\Category_LController;
use App\Http\Controllers\config\LiveController;
use App\Http\Controllers\Config\PermissionController;
use App\Http\Controllers\Config\RegulationController;
use App\Http\Controllers\Config\LinkController;
use App\Http\Controllers\Config\IncentiveController;
use App\Http\Controllers\Config\AboutController;
use App\Http\Controllers\Config\SettingsController;
use App\Http\Controllers\Config\DirectoryController;
use App\Http\Controllers\config\HuatulcoController;


Route::get('',[DesktopController::class, 'index'])->middleware('can:config.home')->name('config.home');
Route::resource('categories', CategoryController::class)->except('show')->names('config.categories');
Route::resource('tags', TagController::class)->names('config.tags');
Route::resource('posts', PostController::class)->names('config.posts');
Route::resource('users', UserController::class)->names('config.users');
Route::resource('roles', RoleController::class)->names('config.roles');
Route::resource('config', ConfigController::class)->names('config.config');
Route::resource('locations', LocationController::class)->names('config.locations');
Route::resource('contact', ContactController::class)->names('config.contacts'); 
Route::resource('videos', VideoController::class)->names('config.videos');
Route::resource('services', ServiceController::class)->names('config.services');
Route::resource('categoriesServices', CategoryServiceController::class)->names('config.categoriesServices');
Route::resource('SubCategoriesServices', SubCategoryServiceController::class)->names('config.subCategoriesServices');
Route::resource('locationCategories', Category_LController::class)->names('config.locationCategories');
Route::resource('areas', AreaController::class)->names('config.areas');
Route::resource('live', LiveController::class)->only('edit','update')->names('config.live');
Route::resource('permissions', PermissionController::class)->names('config.permissions');
Route::resource('regulations', RegulationController::class)->names('config.regulations');
Route::resource('links', LinkController::class)->names('config.links');
Route::resource('incentives', IncentiveController::class)->names('config.incentives');
Route::resource('about', AboutController::class)->only('edit','update')->names('config.about');
Route::resource('directory', DirectoryController::class)->names('config.directory');
Route::resource('huatulco', HuatulcoController::class)->only('index','edit','update')->names('config.huatulco');
Route::get('settings', [SettingsController::class,'index'])->name('settings');


     



