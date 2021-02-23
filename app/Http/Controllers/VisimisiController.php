<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visimisi;
use Storage;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = Visimisi::latest()->get();
        return view('visimisi.index', compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Categories::select('id', 'nama_kategori')->get();
        
        return view('visimisi.create');// compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('gambar')->store('visimisi');
        Visimisi::create([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'gambar' => $image,
        ]);
        return redirect()->route('visimisi.index');
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
        $visimisi = Visimisi::find($id);
        return view('visimisi.edit', compact('visimisi'));
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
            'gambar' => 'mimes:jpeg,bmp,png',
        ]);

        if(empty($request->file('gambar'))){
            $visimisi = Visimisi::find($id);
            $visimisi->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
        ]);

        }else{
            $visimisi = Visimisi::find($id);
            Storage::delete($visimisi->gambar);
            $visimisi->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'gambar' => $request->file('gambar')->store('visimisi'),
            ]);
        }

        return redirect()->route('visimisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visimisi = Visimisi::find($id);
        if (!$visimisi)
        {
            return redirect()->back();
        }
            Storage::delete($visimisi->gambar);
            $visimisi->delete();
            return redirect()->route('visimisi.index');
    }
}