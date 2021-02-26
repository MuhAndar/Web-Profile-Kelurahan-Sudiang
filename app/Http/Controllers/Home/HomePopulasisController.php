<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Populasi;

class HomePopulasisController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $populasi = Populasi::latest()->get();  

        return view('populasi.index', compact('populasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('populasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        populasi::create($request->all());
        
        return redirect()->route('populasi.index');
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
    public function edit($id)
    {
        $populasi = Populasi::find($id);
        return view ('populasi.edit' , compact('populasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $populasi = Populasi::find($id);
        $populasi -> update($request->all());
        return redirect()->route('populasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $populasi = Populasi::find($id);
        if(!$populasi){
            return redirect()->back();
        }
        $populasi->delete();
        return redirect()->route('populasi.index');
    }
}