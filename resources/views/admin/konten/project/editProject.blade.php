@extends('admin.admin')
@section('is_title', 'Add Project')
@section('is_konten')
@section('is_title_konten', 'edit Project / '.$data[0]->siswa->nama )
@foreach($data as $d)
<div class="col-md-8 card shadow">
    <form action="/updateProject" method="post" >
        @csrf
        <input type="hidden" name="id" value="{{$d->id}}">     
        <div class="form-group form-floating">
            <label>Nama</label>
            <input type="text" value="{{ $d->nama_project }}" class="form-control @error('nama_project') is-invalid @enderror" name="nama_project" />
            @error('nama_project')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ $d->deskripsi }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group form-floating">
            <label>Tanggal Project</label>
            <input type="date" value="{{ $d->tanggal }}" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" />
            @error('tanggal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="modal-footer">
            <a href="/masterproject" class="btn btn-warning" ><i class="fa fa-reply"></i>&nbsp;Cancel</a>
            <button class="btn btn-success" ><i class="fa fa-save"></i>&nbsp;Tambah Project</button>
        </div>
       
    </form>
</div>
@endforeach
@endsection