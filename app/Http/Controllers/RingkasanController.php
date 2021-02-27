<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ringkasan;
use Storage;

class RingkasanController extends Controller
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
            'nama' => $request->nama,
            'isi' => $request->isi,
            'bwu' => $request->bwu,
            'bws' => $request->bws,
            'bwt' => $request->bwt,
            'bwb' => $request->bwb,
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
            'nama' => 'required',
            'isi' => 'required',
            'bwu' => 'required',
            'bws' => 'required',
            'bwt' => 'required',
            'bwb' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png',
        ]);

        if(empty($request->file('gambar'))){
            $ringkasan = Ringkasan::find($id);
            $ringkasan->update([
            'nama' => $request->nama,
            'isi' => $request->isi,
            'bwu' => $request->bwu,
            'bws' => $request->bws,
            'bwt' => $request->bwt,
            'bwb' => $request->bwb,
        ]);

        }else{
            $ringkasan = Ringkasan::find($id);
            Storage::delete($ringkasan->gambar);
            $ringkasan->update([
            'nama' => $request->nama,
            'isi' => $request->isi,
            'bwu' => $request->bwu,
            'bws' => $request->bws,
            'bwt' => $request->bwt,
            'bwb' => $request->bwb,
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