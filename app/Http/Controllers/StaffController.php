<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Staff;
use Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::latest()->get();
        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $image = $request->file('gambar')->store('staff');
        // $image       = $request->file('gambar');
        // $filename    = $image->getClientOriginalName();

        // $path = 'public/uploads/staff/' .$filename;
        // $path = $request->file('gambar')->store('uploads/staff', 'public');
        // Image::make(storage_path($path))->resize(150,150)->save();
        // $image_resize->save(public_path('uploads/staff/' .$filename));

        $image       = $request->file('gambar');
        $filename    = $image->getClientOriginalName();

        $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(200, 200);
        $path = public_path('uploads/staff/' .$filename);
        $image_resize->save($path);
        $pathe = 'staff/'.$filename;
        Staff::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'gambar' => $pathe, 
          
        ]);
        return redirect()->route('staff.index');
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
        $staff = Staff::find($id);
        return view('staff.edit', compact('staff'));
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
            'jabatan' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png',
        ]);

        if(empty($request->file('gambar'))){
            $staff = Staff::find($id);
            $staff->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
        ]);

        }else{
            $staff = Staff::find($id);
            Storage::delete($staff->gambar);
            
            $image       = $request->file('gambar');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(200, 200);
            $path = public_path('uploads/staff/' .$filename);
            $image_resize->save($path);
            $pathe = 'staff/'.$filename;
            $staff->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'gambar' => $pathe
            // 'gambar' => $request->file('gambar')->store('staff'),
            ]);
        }

        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        if (!$staff)
        {
            return redirect()->back();
        }
            Storage::delete($staff->gambar);
            $staff->delete();
            return redirect()->route('staff.index');
    }
}