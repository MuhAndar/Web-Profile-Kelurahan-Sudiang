<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Tengah;
use Storage;

class HomeTengahController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tengah = Tengah::latest()->get();
        return view('tengah.index', compact('tengah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Categories::select('id', 'nama_kategori')->get();
        
        return view('tengah.create');// compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image1 = $request->file('gambar1')->store('tengah');
        $image2 = $request->file('gambar2')->store('tengah');
        $image3 = $request->file('gambar3')->store('tengah');
        Tengah::create([
            'text1' => $request->text1,
            'gambar1' => $image1,
            'text2' => $request->text2,
            'gambar2' => $image2,
            'text3' => $request->text3,
            'gambar3' => $image3,
        ]);
        return redirect()->route('tengah.index');
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
        $tengah = tengah::find($id);
        return view('tengah.edit', compact('tengah'));
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

        $tengah = Tengah::find($id);
        Storage::delete($tengah->gambar1);
        Storage::delete($tengah->gambar2);
        Storage::delete($tengah->gambar3);
        $tengah->update([
            'text1' => $request->text1,
            'gambar1' => $request->file('gambar1')->store('tengah'),
            'text2' => $request->text2,
            'gambar2' => $request->file('gambar2')->store('tengah'),
            'text3' => $request->text3,
            'gambar3' => $request->file('gambar3')->store('tengah'),
        ]);
        return redirect()->route('tengah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tengah = Tengah::find($id);
        if (!$tengah)
        {
            return redirect()->back();
        }
            Storage::delete($tengah->gambar);
            $tengah->delete();
            return redirect()->route('tengah.index');
    }
}
