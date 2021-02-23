<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kebersihan;

class KSKebersihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebersihan = Kebersihan::latest()->get();  

        return view('kebersihan.index', compact('kebersihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kebersihan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kebersihan::create($request->all());
        
        return redirect()->route('kebersihan.index');
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
        $kebersihan = Kebersihan::find($id);
        return view ('kebersihan.edit' , compact('kebersihan'));
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
        $kebersihan = Kebersihan::find($id);
        $kebersihan -> update($request->all());
        return redirect()->route('kebersihan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kebersihan = Kebersihan::find($id);
        if(!$kebersihan){
            return redirect()->back();
        }
        $kebersihan->delete();
        return redirect()->route('kebersihan.index');
    }
}