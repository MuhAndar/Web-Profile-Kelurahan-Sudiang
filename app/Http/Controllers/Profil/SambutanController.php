<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Sambutan;
use Storage;

class SambutanController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutan = Sambutan::latest()->get();
        return view('sambutan.index', compact('sambutan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Categories::select('id', 'nama_kategori')->get();
        
        return view('sambutan.create');// compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'text' => 'required',
        //     'gambar' => 'mimes:jpeg,bmp,png',
        // ]);

        $image = $request->file('gambar')->store('sambutan');
        Sambutan::create([
            'text' => $request->text,
            'gambar' => $image,
        ]);
        return redirect()->route('sambutan.index');
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
        $sambutan = Sambutan::find($id);
        return view('sambutan.edit', compact('sambutan'));
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
        $this->validate($request, [
            'text' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png',
        ]);

        if(empty($request->file('gambar'))){

            $sambutan = Sambutan::find($id);
            $sambutan->update([
            'text' => $request->text,
        ]);

        }else{
            $sambutan = Sambutan::find($id);
            Storage::delete($sambutan->gambar);
            $sambutan->update([
            'text' => $request->text,
            'gambar' => $request->file('gambar')->store('sambutan'),
            ]);
        }

        return redirect()->route('sambutan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sambutan = Sambutan::find($id);
        if (!$sambutan)
        {
            return redirect()->back();
        }
            Storage::delete($sambutan->gambar);
            $sambutan->delete();
            return redirect()->route('sambutan.index');
    }
}