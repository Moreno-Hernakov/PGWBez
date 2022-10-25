@extends('admin.admin')
@section('is_title', 'Edit Siswa')
@section('is_title_konten', 'Edit Siswa' )
@section('is_konten')
<div class="col-md-8">
    <form action="/mastersiswa/{{$data->id}}" enctype="multipart/form-data" method="post" >
        @method('put')
        @csrf      
                            
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{$data->nama}}" name="nama"/>
            @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>NISN</label>
            <input type="text" class="form-control @error('nisn') is-invalid @enderror" value="{{$data->nisn}}" name="nisn" />
            @error('nisn')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{$data->alamat}}" name="alamat" />
            @error('alamat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Foto Siswa</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror-file" value="{{$data->foto}}" name="foto" />
            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label> 
            <select class="form-select form-control @error('jk') is-invalid @enderror" value="{{$data->jk}}" id="jk" name="jk">
                <option value="none" selected disabled hidden>{{$data->jk}}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jk')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>About</label>
            <textarea class="form-control @error('about') is-invalid @enderror" name="about" />{{$data->about}}</textarea>
            @error('about')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="modal-footer">
            <a href="/mastersiswa" class="btn btn-warning" ><i class="fa fa-reply"></i>&nbsp;Cancel</a>
            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button> -->
            <button class="btn btn-success" ><i class="fa fa-save"></i>&nbsp;Update User</button>
        </div>   
    </form>
</div>
@endsection