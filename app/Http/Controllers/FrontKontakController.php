<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontaks;
use App\About;

class FrontKontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('1kontak.kontak' ,compact('about'));

        // $kontaks = Kontaks::latest()->get();  
        // return view('kontaks.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kontaks = Kontaks::latest()->get();
        $about = About::all();
        return view('1kontak.kontak' ,compact('kontak', 'about'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = About::all();
        Kontaks::create($request->all());
        
        return view('1kontak.kontak' ,compact('about'));  
        // return redirect()->route('1kontak.kontak');
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
        $kontaks = Kontaks::find($id);
        return view ('kontaks.edit' , compact('kontaks'));
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
        $kontaks = Kontaks::find($id);
        $kontaks -> update($request->all());
        return redirect()->route('kontaks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontaks = Kontaks::find($id);
        if(!$kontaks){
            return redirect()->back();
        }
        $kontaks->delete();
        return redirect()->route('kontaks.index');
    }
}
