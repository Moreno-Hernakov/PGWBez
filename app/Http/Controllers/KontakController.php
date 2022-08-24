<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;
use App\Models\jenis;


class KontakController extends Controller
{
    public function view(){
        // return view('admin.konten.masterKontak');
        $data = kontak::with('siswa', 'jenis')->get();
        return view('admin.konten.masterKontak', ["datas" => $data]);

    }

    public function data(){
        return kontak::with('siswa', 'jenis')->get();
        // return jenis::get();
    }
}
