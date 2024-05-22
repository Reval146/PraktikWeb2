<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    { //kembalikan tampilan halaman dashboard admin
        return view('pegawai.index');
    }
}
