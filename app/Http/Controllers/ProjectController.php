<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\project;

class ProjectController extends Controller
{
    public function view(){
        $data = siswa::paginate(1);
        return view('admin.konten.MasterProject', ["datas" => $data]);
        // return view('admin.konten.masterProject');
        // $data = kontak::with('siswa', 'jenis')->get();
        // return view('admin.konten.masterProject', ["data" => $data]);

    }

    public function data($id){
        $data = project::where('siswa_id', $id)->with('siswa')->get();
        // return $data;
        return view('admin.konten.project.showProject', ["datas" => $data]);
        // return jenis::get();
    }

    public function create($id){
        $data = siswa::find($id);
        // return $data;
        return view('admin.konten.project.addProject', compact("data"));
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama_project' => 'required|min:7|max:30',
            'deskripsi' => 'required|min:10',
            'tanggal' => 'required',
        ]);

        $validasi["siswa_id"] = $request->id;
        project::create($validasi)->with('success', 'data telah ditambahkan');;
        // return $validasi;
        return redirect("/masterproject")->with('success', 'data telah ditambahkan');
        // return ->with('success', 'Project telah ditambahkan');
        // return siswa::find($id);
        // return $data;
        // return view('admin.konten.project.addProject', compact("data"));
    }

    public function edit(Request $request, $id){
        $data = project::where('id', $id)->with('siswa')->get();
        // return $data;
        return view('admin.konten.project.editProject', compact("data"));
    }

    public function update(Request $request){
        $data = [
            'nama_project' => $request->nama_project,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal
        ];

        project::where('id', $request->id)->update($data);
        return redirect("/masterproject")->with('success', 'data telah diperbarui');
    }

    public function destroy($id){
        project::destroy($id);
        return redirect("/masterproject")->with('success', 'data telah dihapus');
    }

}
