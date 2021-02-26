<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Ringkasan;
use Storage;

class RingkasanController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ringkasan = Ringkasan::latest()->get();
        return view('ringkasan.index', compact('ringkasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Categories::select('id', 'nama_kategori')->get();
        
        return view('ringkasan.create');// compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('gambar')->store('ringkasan');
        Ringkasan::create([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'gambar' => $image,
        ]);
        return redirect()->route('ringkasan.index');
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
        $ringkasan = Ringkasan::find($id);
        return view('ringkasan.edit', compact('ringkasan'));
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
            'text1' => 'required',
            'text2' => 'required',
            'text3' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png',
        ]);

        if(empty($request->file('gambar'))){
            $ringkasan = Ringkasan::find($id);
            $ringkasan->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
        ]);

        }else{
            $ringkasan = Ringkasan::find($id);
            Storage::delete($ringkasan->gambar);
            $ringkasan->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'gambar' => $request->file('gambar')->store('ringkasan'),
            ]);
        }

        return redirect()->route('ringkasan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ringkasan = Ringkasan::find($id);
        if (!$ringkasan)
        {
            return redirect()->back();
        }
            Storage::delete($ringkasan->gambar);
            $ringkasan->delete();
            return redirect()->route('ringkasan.index');
    }
}