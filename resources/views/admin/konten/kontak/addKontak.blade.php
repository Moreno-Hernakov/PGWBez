@extends('admin.admin')
@section('is_title', 'Add Kontak')
@section('is_title_konten', 'Add Kontak / '. $data->nama )
@section('is_konten')
<div class="col-md-8 card shadow pt-3">
    <form action="/masterkontak" method="post" >
        @csrf      
        <input type="hidden" name="siswa_id" value="{{$data->id}}"> 
        <div class="form-group form-floating">
            <label>Jenis Kontak</label>
            <select name="jenis_id" id="jenis_id" class="form-control">
                @foreach($jenis as $p)
                <option value="{{$p->id}}">{{$p->jenis_kontak}}</option>
                @endforeach
              </select>
        </div>         
        <div class="form-group form-floating">
            <label>Deskripsi</label>
            <input type="text" value="{{ old('deskripsi') }}" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" />
            @error('nama_project')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="modal-footer">
            <a href="/masterkontak" class="btn btn-warning" ><i class="fa fa-reply"></i>&nbsp;Cancel</a>
            <button class="btn btn-success" ><i class="fa fa-save"></i>&nbsp;Tambah Kontak</button>
        </div>
    </form>
</div>
@endsection