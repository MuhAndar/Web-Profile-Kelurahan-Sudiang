<?php

namespace App\Http\Controllers\Syarat_Pengurusan;

use Illuminate\Http\Request;
use App\Sekretaris;

class SKSekretarisController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekretaris = Sekretaris::latest()->get();  

        return view('sekretaris.index', compact('sekretaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekretaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sekretaris::create($request->all());
        
        return redirect()->route('sekretaris.index');
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
        $sekretaris = Sekretaris::find($id);
        return view ('sekretaris.edit' , compact('sekretaris'));
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
        $sekretaris = Sekretaris::find($id);
        $sekretaris -> update($request->all());
        return redirect()->route('sekretaris.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sekretaris = Sekretaris::find($id);
        if(!$sekretaris){
            return redirect()->back();
        }
        $sekretaris->delete();
        return redirect()->route('sekretaris.index');
    }
}
