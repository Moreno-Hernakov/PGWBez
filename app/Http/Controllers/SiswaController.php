<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function view(){
        return view('admin.konten.masterSiswa');
    }

    public function data(){
        return siswa::where('nama','reno')->get();
    }
}
