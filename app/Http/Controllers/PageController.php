<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontaks;
use App\Populasi;
use App\Sekretaris;
use App\Pemerintahan;
use App\Perekonomian;
use App\Kebersihan;
use App\Tengah;
use App\Slogan;
use App\About;
use App\Visimisi;
use App\Sambutan;
use App\Ringkasan;

class PageController extends Controller
{
    public function index()
    {
        // $tengah = Tengah::all();
        // return view('index' ,compact('tengah'));

        $slogan = Slogan::all();
        $populasi = Populasi::all();
        $tengah = Tengah::all();
        $about = About::all();
        $sekretaris1 = Sekretaris::where('id', '3')->get();
        $sekretaris2 = Sekretaris::where('id', '5')->get();
        $sekretaris3 = Sekretaris::where('id', '6')->get();
        $sekretaris4 = Sekretaris::where('id', '7')->get();
        $sekretaris5 = Sekretaris::where('id', '8')->get();
        $kebersihan1 = Kebersihan::where('id', '1')->get();
        $kebersihan2 = Kebersihan::where('id', '2')->get();
        $kebersihan3 = Kebersihan::where('id', '3')->get();
        $kebersihan4 = Kebersihan::where('id', '4')->get();
        $kebersihan5 = Kebersihan::where('id', '5')->get();
        $pemerintahan1 = Pemerintahan::where('id', '1')->get();
        $pemerintahan2 = Pemerintahan::where('id', '2')->get();
        $pemerintahan3 = Pemerintahan::where('id', '3')->get();
        $pemerintahan4 = Pemerintahan::where('id', '4')->get();
        $pemerintahan5 = Pemerintahan::where('id', '5')->get();
        $pemerintahan6 = Pemerintahan::where('id', '6')->get();
        $perekonomian1 = Perekonomian::where('id', '1')->get();
        $perekonomian2 = Perekonomian::where('id', '2')->get();
        $perekonomian3 = Perekonomian::where('id', '3')->get();
        $perekonomian4 = Perekonomian::where('id', '4')->get();
        $perekonomian5 = Perekonomian::where('id', '5')->get();
        $perekonomian6 = Perekonomian::where('id', '6')->get();
        $perekonomian7 = Perekonomian::where('id', '7')->get();
        $perekonomian8 = Perekonomian::where('id', '8')->get();
        $perekonomian9 = Perekonomian::where('id', '9')->get();
        $perekonomian10 = Perekonomian::where('id', '10')->get();
        $perekonomian11 = Perekonomian::where('id', '11')->get();
        $perekonomian12 = Perekonomian::where('id', '12')->get();
        $perekonomian13 = Perekonomian::where('id', '13')->get();
        $perekonomian14 = Perekonomian::where('id', '14')->get();
        return view('index' ,compact('slogan', 'populasi', 'tengah', 'sekretaris1', 'sekretaris2', 'sekretaris3', 'sekretaris4', 
                    'sekretaris5', 'kebersihan1', 'kebersihan2', 'kebersihan3', 'kebersihan4', 'kebersihan5', 'pemerintahan1',
                    'pemerintahan2', 'pemerintahan3', 'pemerintahan4', 'pemerintahan5', 'pemerintahan6', 'perekonomian1', 
                    'perekonomian2', 'perekonomian3', 'perekonomian4', 'perekonomian5', 'perekonomian6','perekonomian7', 
                    'perekonomian8', 'perekonomian9', 'perekonomian10', 'perekonomian11', 'perekonomian12', 
                    'perekonomian13', 'perekonomian14', 'about'));
    }

    public function tengah()
    {
        $tengah = Tengah::all();
        return view('index' ,compact('tengah'));
    }

    public function sambutan()
    {
        $about = About::all();
        $sambutan = Sambutan::all();
        return view('1profil.sambutan' ,compact('about', 'sambutan'));
    }

    public function ringkasan()
    {
        $about = About::all();
        $ringkasan = Ringkasan::all();
        return view('1profil.ringkasan' ,compact('about', 'ringkasan'));
    }

    public function vmts()
    {
        $about = About::all();
        $visimisi = Visimisi::all();
        $visimisi1 = Visimisi::where('id', '1')->get();
        $visimisi2 = Visimisi::where('id', '2')->get();
        $visimisi3 = Visimisi::where('id', '3')->get();
        $visimisi4 = Visimisi::where('id', '4')->get();
        $visimisi5 = Visimisi::where('id', '5')->get();
        return view('1profil.vmts' ,compact('visimisi', 'visimisi1', 'visimisi2', 'visimisi3', 
                    'visimisi4', 'visimisi5', 'about'));
    }

    public function staff1()
    {
        return view('1staff.staff');
    }

    public function sekretaris()
    {
        $about = About::all();
        $sekretaris = Sekretaris::all();
        $sekretaris1 = Sekretaris::where('id', '3')->get();
        $sekretaris2 = Sekretaris::where('id', '5')->get();
        $sekretaris3 = Sekretaris::where('id', '6')->get();
        $sekretaris4 = Sekretaris::where('id', '7')->get();
        $sekretaris5 = Sekretaris::where('id', '8')->get();
        return view('1syarat.sekretaris' ,compact('sekretaris', 'sekretaris1', 'sekretaris2', 'sekretaris3', 
                    'sekretaris4', 'sekretaris5', 'about'));
    }

    public function sKebersihan()
    {
        $about = About::all();
        $kebersihan = Kebersihan::all();
        $kebersihan1 = Kebersihan::where('id', '1')->get();
        $kebersihan2 = Kebersihan::where('id', '2')->get();
        $kebersihan3 = Kebersihan::where('id', '3')->get();
        $kebersihan4 = Kebersihan::where('id', '4')->get();
        $kebersihan5 = Kebersihan::where('id', '5')->get();
        return view('1syarat.s_kebersihan' ,compact('kebersihan', 'kebersihan1', 'kebersihan2', 'kebersihan3', 
                    'kebersihan4', 'kebersihan5', 'about'));
    }

    public function sPemerintahan()
    {
        $about = About::all();
        $pemerintahan = Pemerintahan::all();
        $pemerintahan1 = Pemerintahan::where('id', '1')->get();
        $pemerintahan2 = Pemerintahan::where('id', '2')->get();
        $pemerintahan3 = Pemerintahan::where('id', '3')->get();
        $pemerintahan4 = Pemerintahan::where('id', '4')->get();
        $pemerintahan5 = Pemerintahan::where('id', '5')->get();
        $pemerintahan6 = Pemerintahan::where('id', '6')->get();
        return view('1syarat.s_pemerintahan' ,compact('pemerintahan', 'pemerintahan1', 'pemerintahan2', 'pemerintahan3', 
                    'pemerintahan4', 'pemerintahan5', 'pemerintahan6', 'about'));
    }

    public function sPerekonomian()
    {
        $about = About::all();
        $perekonomian = Perekonomian::all();
        $perekonomian1 = Perekonomian::where('id', '1')->get();
        $perekonomian2 = Perekonomian::where('id', '2')->get();
        $perekonomian3 = Perekonomian::where('id', '3')->get();
        $perekonomian4 = Perekonomian::where('id', '4')->get();
        $perekonomian5 = Perekonomian::where('id', '5')->get();
        $perekonomian6 = Perekonomian::where('id', '6')->get();
        $perekonomian7 = Perekonomian::where('id', '7')->get();
        $perekonomian8 = Perekonomian::where('id', '8')->get();
        $perekonomian9 = Perekonomian::where('id', '9')->get();
        $perekonomian10 = Perekonomian::where('id', '10')->get();
        $perekonomian11 = Perekonomian::where('id', '11')->get();
        $perekonomian12 = Perekonomian::where('id', '12')->get();
        $perekonomian13 = Perekonomian::where('id', '13')->get();
        $perekonomian14 = Perekonomian::where('id', '14')->get();
        return view('1syarat.s_perekonomian' ,compact('perekonomian', 'perekonomian1', 'perekonomian2', 'perekonomian3', 
                    'perekonomian4', 'perekonomian5', 'perekonomian6','perekonomian7', 'perekonomian8', 'perekonomian9', 
                    'perekonomian10', 'perekonomian11', 'perekonomian12', 'perekonomian13', 'perekonomian14',  'about'));
    }

    public function kontak()
    {
        // Kontaks::create($request->all());
        $about = About::all();
        return view('1kontak.kontak' ,compact('about'));
    }

    public function pkk()
    {
        $about = About::all();
        return view('1ekstra.pkk' ,compact('about'));
    }

    public function lurah()
    {
        $about = About::all();
        return view('1ekstra.lurah' ,compact('about'));
    }

    public function kepengurusanberkas()
    {
        $about = About::all();
        return view('kepengurusanberkas' ,compact('about'));
    }
}
