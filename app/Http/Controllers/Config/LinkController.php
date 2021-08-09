<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();

        return view('config.links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = Link::create($request->all()); 

        if ($request->file('file')) {
            $url = Storage::put('links', $request->file('file'));

            $link->image()->create([
                'url' => $url
            ]);
        }
   
        return redirect()->route('config.links.index')->with('info', 'El enlace se creó con éxito');
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
    public function edit(Link $link)
    {
        return view('config.links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $link->update($request->all());

        /* if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            if ($link->image) {
                Storage::delete($link->image->url);

                $link->image->update([
                    'url' => $url
                ]);
            } else {
                $link->image()->create([
                    'url' => $url
                ]);
            }
        } */

        return redirect()->route('config.links.index')->with('info', 'El enlace se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return redirect()->route('config.links.index')->with('info', 'El enlace se eliminó con éxito');
    }
}
