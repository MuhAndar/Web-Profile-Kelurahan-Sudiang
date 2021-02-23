<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perekonomian;

class KSPerekonomianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perekonomian = Perekonomian::latest()->get();  

        return view('perekonomian.index', compact('perekonomian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perekonomian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perekonomian::create($request->all());
        
        return redirect()->route('perekonomian.index');
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
        $perekonomian = Perekonomian::find($id);
        return view ('perekonomian.edit' , compact('perekonomian'));
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
        $perekonomian = Perekonomian::find($id);
        $perekonomian -> update($request->all());
        return redirect()->route('perekonomian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perekonomian = Perekonomian::find($id);
        if(!$perekonomian){
            return redirect()->back();
        }
        $perekonomian->delete();
        return redirect()->route('perekonomian.index');
    }
}