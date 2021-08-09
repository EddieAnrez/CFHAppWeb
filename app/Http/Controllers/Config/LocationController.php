<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Category_L;
use App\Models\Area;
use App\Http\Requests\LocationRequest;
use App\Models\ImageLocation;
use Illuminate\Support\Facades\Storage;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('config.location.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        $categories = Category_L::pluck('name','id');
        $areas = Area::pluck('name','id');
        $images=[];
        return view('config.location.create', compact('categories','areas','images'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        /* return $request->file('file2'); */
        
        $location=Location::create($request->all()); 

        if($request->file('file')){
            $url=Storage::put('locations', $request->file('file'));
            $location->image()->create([
                'url' =>$url
            ]);
        }

        if($request->file('file1')){
            $url=Storage::put('locations', $request->file('file1'));
            $location->image()->create([
                'url' =>$url
            ]);
        }

        if($request->file('file2')){
            $url=Storage::put('locations', $request->file('file2'));
            $location->image()->create([
                'url' =>$url
            ]);
        }

        if($request->file('file3')){
            $url=Storage::put('locations', $request->file('file3'));
            $location->image()->create([
                'url' =>$url
            ]);
        }

        if($request->file('file4')){
            $url=Storage::put('locations', $request->file('file4'));
            $location->image()->create([
                'url' =>$url
            ]);
        }

        
        return redirect()->route('config.locations.edit',$location); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return view('config.location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        
        $categories = Category_L::pluck('name','id');
        $areas = Area::pluck('name','id');
        $images = ImageLocation::where('imageable_id',$location->id)->orderBy('id','asc')->get();
        return view('config.location.edit', compact('location', 'categories','areas','images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LocationRequest $request, Location $location, ImageLocation $images)
    {
        $location->update($request->all());

        if ($request->file('file')){

            $url = Storage::put('locations', $request->file('file'));
            if($images[0]){
                Storage::delete($images[0]->url);
                $images[0]()->update([
                    'url' => $url
                ]);
            }else{
                $location->image()->create([
                    'url'=> $url
                ]);
            }
        }
       

        return redirect()->route('config.locations.index')->with('info', 'La locación se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('config.locations.index')->with('info', 'La locación se elimino con exito');
    }
}
