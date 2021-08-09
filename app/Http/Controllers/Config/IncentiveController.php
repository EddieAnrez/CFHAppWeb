<?php

namespace App\Http\Controllers\config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incentive;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\IncentiveRequest;

class IncentiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incentives = Incentive::all();
        return view ('config.incentives.index', compact('incentives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('config.incentives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncentiveRequest $request)
    {
        $incentive = Incentive::create($request->all());  

        if ($request->file('file')) {
            $url = Storage::put('incentives', $request->file('file'));

            $incentive->image()->create([
                'url' => $url
            ]);
        }
      

        return redirect()->route('config.incentives.index')->with('info', 'El estímulo se creó con éxito');
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
    public function edit(Incentive $incentive)
    {
        return view('config.incentives.edit', compact('incentive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IncentiveRequest $request, Incentive $incentive)
    {
        $request['user_id'] = auth()->user()->id;

        $incentive->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('incentives', $request->file('file'));

            if ($incentive->image) {
                Storage::delete($incentive->image->url);

                $incentive->image->update([
                    'url' => $url
                ]);
            } else {
                $incentive->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('config.incentives.index')->with('info', 'El estímulo se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incentive $incentive)
    {
        $incentive->delete();

        return redirect()->route('config.incentives.index')->with('info', 'El post se elimino con éxito');
    }
}
