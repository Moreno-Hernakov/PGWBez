@extends('admin.admin')
@section('is_title', 'Add Siswa')
@section('is_title_konten', 'Add Siswa' )
@section('is_konten')
<div class="col-md-8">
    <form action="/mastersiswa" enctype="multipart/form-data" method="post" >
        @csrf      
        <div class="form-group form-floating">
                        
            <label>Nama</label>
            <input type="text" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" name="nama" />
            @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>NISN</label>
            <input type="text" value="{{ old('nisn') }}"  class="form-control  @error('nisn') is-invalid @enderror" name="nisn" />
            @error('nisn')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" value="{{ old('alamat') }}"  class="form-control @error('alamat') is-invalid @enderror" name="alamat" />
            @error('alamat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Foto Siswa</label>
            <input type="file" value="{{ old('foto') }}" class="form-control-file @error('foto') is-invalid @enderror" name="foto" />
            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label> 
            <select value="{{ old('jk') }}" class="form-select form-control" id="jk" name="jk">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>About</label>
            <textarea class="form-control @error('about') is-invalid @enderror" name="about" />{{ old('about') }}</textarea>
            @error('about')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="modal-footer">
            <a href="/mastersiswa" class="btn btn-warning" ><i class="fa fa-reply"></i>&nbsp;Cancel</a>
            <button class="btn btn-success" ><i class="fa fa-save"></i>&nbsp;Tambah Siswa</button>
        </div>
    </form>
</div>
@endsection