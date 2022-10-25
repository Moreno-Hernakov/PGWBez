<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\siswa;
use Illuminate\Support\Facades\Validator;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::all();
        return view('admin.konten.masterSiswa', ["datas" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.konten.siswa.AddSiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|min:7|max:30',
            'nisn' => 'required|numeric',
            'foto' => 'required|mimes:jpg,png,jpeg',
            'alamat' => 'required',
            'about' => 'required|min:10',
            'jk' => 'required'
        ]);

        // $validasi["foto"] = $request->file("foto")->store('post-images');

        // siswa::create($validasi);

        // return back()->with('success', 'data telah ditambahkan');
        // $validator = Validator::make(request()->all(),
        // [
        //     'nama' => 'required|min:7|max:30',
        //     'nisn' => 'required|numeric',
        //     'foto' => 'required|mimes:jpg,png,jpeg',
        //     'alamat' => 'required',
        //     'about' => 'required|min:10',
        //     'jk' => 'required'
        // ]);
        
        // if ($validator->passes()) {
        siswa::create([
            'foto' => $request->file("foto")->store('post-images', 'public'),
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'about' => $request->about,
            'jk' => $request->jk
        ]);
        return redirect("/mastersiswa")->with('success', 'data telah ditambahkan');
        // } 
        // if ($validator->fails()) {
            // return redirect('/mastersiswa')->withErrors($validasi);
            // return back()->with('error', 'data gagal ditambahkan!!!');
        // }
        // return request()->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = siswa::where('id', $id)->with('kontak')->get();
        // return $siswa;
        return view('admin.konten.siswa.ShowSiswa', ["siswa" => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = siswa::find($id);
        // return $data;
        return view('admin.konten.siswa.EditSiswa', compact('data'));
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
        // $validator = Validator::make(request()->all(),
        // [
        //     'nama' => 'required|min:7|max:30',
        //     'nisn' => 'required|numeric',
        //     'foto' => 'mimes:jpg,png,jpeg',
        //     'alamat' => 'required',
        //     'about' => 'required|min:10',
        //     'jk' => 'required'
        // ]);

         $validasi = $request->validate([
            'nama' => 'required|min:7|max:30',
            'nisn' => 'required|numeric',
            'foto' => 'mimes:jpg,png,jpeg',
            'alamat' => 'required',
            'about' => 'required|min:10'
        ]);

        // $data = [
        //         'nama' => $request->nama,
        //         'nisn' => $request->nisn,
        //         'alamat' => $request->alamat,
        //         'about' => $request->about,
        //         'jk' => $request->jk
        // ];

        if ($request->hasFile('foto')) {
            $validasi["foto"] = $request->file("foto")->store('post-images', 'public');
        } 

        // if ($validator->passes()) {
            siswa::where('id', $id)->update($validasi);
            return redirect("/mastersiswa")->with('success', 'data telah diperbarui');
        // } 

        // if ($validator->fails()) {
            // return redirect('/mastersiswa')->withErrors($validasi);
        //     return back()->with('error', 'data gagal diperbarui!!!');
        // }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where('id', $id)->delete();

        return back()->with('success', 'data telah dihapus');
    }
}
