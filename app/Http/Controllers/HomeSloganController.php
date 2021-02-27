<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slogan;
use Storage;

class HomeSloganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slogan = Slogan::latest()->get();
        return view('slogan.index', compact('slogan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Categories::select('id', 'nama_kategori')->get();
        
        return view('slogan.create');// compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image1 = $request->file('gambar1')->store('slogan');
        $image2 = $request->file('gambar2')->store('slogan');
        $image3 = $request->file('gambar3')->store('slogan');
        Slogan::create([
            'text1' => $request->text1,
            'gambar1' => $image1,
            'text2' => $request->text2,
            'gambar2' => $image2,
            'text3' => $request->text3,
            'gambar3' => $image3,
        ]);
        return redirect()->route('slogan.index');
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
        $slogan = Slogan::find($id);
        return view('slogan.edit', compact('slogan'));
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
            'gambar1' => 'mimes:jpeg,bmp,png',
            'text2' => 'required',
            'gambar2' => 'mimes:jpeg,bmp,png',
            'text3' => 'required',
            'gambar3' => 'mimes:jpeg,bmp,png',
        ]);

        if(empty($request->file('gambar'))){

            $slogan = Slogan::find($id);
            $slogan->update([
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
        ]);

        }else{
            $slogan = Slogan::find($id);
            Storage::delete($slogan->gambar1);
            Storage::delete($slogan->gambar2);
            Storage::delete($slogan->gambar3);
            $slogan->update([
            'text1' => $request->text1,
            'gambar1' => $request->file('gambar1')->store('slogan'),
            'text2' => $request->text2,
            'gambar2' => $request->file('gambar2')->store('slogan'),
            'text3' => $request->text3,
            'gambar3' => $request->file('gambar3')->store('slogan'),
            ]);
        }

        return redirect()->route('slogan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slogan = Slogan::find($id);
        if (!$slogan)
        {
            return redirect()->back();
        }
            Storage::delete($slogan->gambar);
            $slogan->delete();
            return redirect()->route('slogan.index');
    }
}