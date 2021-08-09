<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permisssion;

class PermissionController extends Controller
{
    public function index(){
        $permissions= Permisssion::where('id','>',0)->latest('id')->paginate(12);
        return view ('production.permissions', compact('permissions'));
    }
}
