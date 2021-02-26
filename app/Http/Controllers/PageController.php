<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sambutan()
    {
        return view('1profil.sambutan');
    }

    public function ringkasan()
    {
        return view('1profil.ringkasan');
    }

    public function vmts()
    {
        return view('1profil.vmts');
    }

    public function staff1()
    {
        return view('1staff.staff');
    }

    public function sekretaris()
    {
        return view('1syarat.sekretaris');
    }

    public function sKebersihan()
    {
        return view('1syarats_kebersihan');
    }

    public function sPemerintahan()
    {
        return view('1syarat.s_pemerintahan');
    }

    public function sPerekonomian()
    {
        return view('1syarat.s_perekonomian');
    }

    public function kontak()
    {
        return view('1kontak.kontak');
    }

    public function pkk()
    {
        return view('1ekstra.pkk');
    }

    public function lurah()
    {
        return view('1ekstra.lurah');
    }

    public function kepengurusanberkas()
    {
        return view('kepengurusanberkas');
    }
}
