<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemerintahan;

class KSPemerintahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemerintahan = Pemerintahan::latest()->get();  

        return view('pemerintahan.index', compact('pemerintahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemerintahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pemerintahan::create($request->all());
        
        return redirect()->route('pemerintahan.index');
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
        $pemerintahan = Pemerintahan::find($id);
        return view ('pemerintahan.edit' , compact('pemerintahan'));
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
        $pemerintahan = Pemerintahan::find($id);
        $pemerintahan -> update($request->all());
        return redirect()->route('pemerintahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemerintahan = Pemerintahan::find($id);
        if(!$pemerintahan){
            return redirect()->back();
        }
        $pemerintahan->delete();
        return redirect()->route('pemerintahan.index');
    }
}