@extends('admin.admin')
@section('is_title', 'MasterKontak')
@section('is_title_konten', 'MasterKontak' )
@section('is_konten')
<!-- <form action="/masterkontak" method="post">
    @csrf
    <button class="btn btn-primary col-md-12 mb-3">Kirim</button>
</form> -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">master</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
</ol>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table Kontak</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-warning">
                    <tr>
                        <th>Nama SIswa</th>
                        <th>Jenis Kontak</th>
                        <th>Deskripsi</th>
                        <th>Created_at</th>
                    </tr>
                </thead>
                @foreach ($datas as $data)
                <tbody>
                    <tr>
                        <th>{{$data->siswa->nama}}</th>
                        <th>{{$data->jenis->jenis_kontak}}</th>
                        <th>{{$data->deskripsi}}</th>
                        <th>{{$data->created_at}}</th>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection