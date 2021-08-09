<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use App\Models\Huatulco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HuatulcoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Huatulco::all();
        return view ('config.huatulco.index',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Huatulco $huatulco)
    {
        /* $this->authorize('author',$post); */
        /* $categories = Category::pluck('name', 'id');
        $tags = Tag::all(); */
        $section = $huatulco;
        return view('config.huatulco.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Huatulco $huatulco)
    {

        $request->validate([ 
            'section'=>'required',
            'body'=>'required',
            'file'=>'image'
        ]);

        $huatulco->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            if ($huatulco->image) {
                Storage::delete($huatulco->image->url);

                $huatulco->image->update([
                    'url' => $url
                ]);
            } else {
                $huatulco->image()->create([
                    'url' => $url
                ]);
            }
        }
       

        return redirect()->route('config.huatulco.index')->with('info', 'La sección se actualizó con exito');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
