<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function view(){
        return view('admin.konten.masterProject');
        // $data = kontak::with('siswa', 'jenis')->get();
        // return view('admin.konten.masterProject', ["data" => $data]);

    }

    public function data(){
        return project::with('siswa')->get();
        // return jenis::get();
    }
}
