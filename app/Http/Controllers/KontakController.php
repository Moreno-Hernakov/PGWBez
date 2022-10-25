<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;
use App\Models\siswa;
use App\Models\jenis;

class kontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = jenis::get();
        $datas = siswa::paginate(1);
        // return $jenis;
        return view('admin.konten.masterKontak', compact('datas', 'jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        // return csrf_token();
        $jenis = jenis::get();
        $data = siswa::find($request->id);
        return view('admin.konten.kontak.addKontak', compact('data', 'jenis'));
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
            'deskripsi' => 'required',
            'jenis_id' => 'required',
            'siswa_id' => 'required'
        ]);

        $data = kontak::create($validasi);

        return response()->json([
            "data" => $data,
            "success" => true,
            "messagge" => "kontak berhasil ditambahkan"
        ], 200);
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
        //
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
        $data = [
            "jenis_id" => $request->jenis_id,
            "deskripsi" => $request->deskripsi
        ];

        kontak::where('id', $id)->update($data);

        return response()->json([
            "data" => $data,
            "success" => true,
            "messagge" => "kontak berhasil diperbarui"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kontak::destroy($id);
        return response()->json([
            "success" => true,
            "messagge" => "kontak berhasil dihapus"
        ], 200);
    }

    public function showKontak($id)
    {
        $jenis = jenis::get();
        $datas = kontak::where('siswa_id', $id)->with('siswa', 'jenis')->get();
        // return $datas;
        return view('admin.konten.kontak.showKontak', compact('datas', 'jenis'));
    }

// ===================================================================================================
// ===================================================================================================

    public function updatejenis(Request $request)
    {
        $data = jenis::find($request->id);
        return response()->json([
            "data" => $data,
            "success" => true
        ]);
    }

    public function deleteJenis($id)
    {
        jenis::destroy($id);
        return response()->json([
            "success" => true,
            "messagge" => "jenis kontak berhasil dihapus"
        ]);
    }

    public function storeJenis(Request $request)
    {
        $data = [
            "jenis_kontak" => $request->jenis
        ];

        if(is_null($request->id)){
            jenis::create($data);
            $msg = "jenis kontak berhasil ditambahkan";
        } else {
            jenis::where('id', $request->id)->update($data);
            $msg = "jenis kontak berhasil diperbarui";
        }

        return response()->json([
            "data" => $data,
            "success" => true,
            "messagge" => $msg
        ]);
    }

}
