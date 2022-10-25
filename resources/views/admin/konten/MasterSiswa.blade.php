@extends('admin.admin')
@section('is_title', 'MasterSiswa')
@section('is_title_konten', 'MasterSiswa' )
@section('is_konten')
<!-- MODAL ADD DATA -->
<!-- <div class="modal fade bd-example-modal-centered-plus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  p-5">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button>
                        <button class="btn btn-success" ><i class="fa fa-save"></i>&nbsp;Tambah Siswa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->


<!-- MODAL DELETE DATA -->
@foreach ($datas as $deleteModal)
    <div class="modal fade" id="exampleModalCenter{{$deleteModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">hapus data?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$deleteModal->nama}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button>
                    <form action="mastersiswa/{{$deleteModal->id}}" method="post" style="display:inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"><i class='fa fa-trash-o'></i>&nbsp;hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- ALERT DATA -->
@if(session()->has('success')) 
    <div class="alert alert-success alert-dismissible fade show col-md-3 m-3" style="z-index: 100 !important; position:absolute; right: 25px;" role="alert">
        <i class="fa fa-check-circle"></i> &nbsp;
        <strong>[INFO] </strong>
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> 
@elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show col-md-4 m-3" style="z-index: 100 !important; position:absolute; right: 25px;" role="alert">
        <i class="fa fa-exclamation-triangle"></i> &nbsp;
        <strong>[ERROR] </strong>
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>  
@endif 
    


<!-- TABLE DATA + CRUD -->
<div class="card shadow mb-4 " style="z-index: 1;  position:relative;">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">Table Siswa</h6> -->
        <a href="{{ route('mastersiswa.create') }}" class="btn btn-info">
            Tambah Data &nbsp;<i class="fa fa-plus "></i>
        </a>
        <!-- <button class="btn btn-info m-1 rounded" data-toggle="modal" data-target=".bd-example-modal-centered-plus">Tambah Data &nbsp;<b><i class="fa fa-plus"></i></b> </button> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-info">
                    <tr>
                        <th width="5%" class="pl-3">#</th>
                        <th width="5%" >foto</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th width="11%" >action</th>
                    </tr>
                </thead>
                @foreach ($datas as $data)
                <tbody>
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <th> 
                            <img src="{{asset('storage/'.$data->foto)}}"  style="width:40px; height: 40px;" class=" rounded-circle"> 
                        </th>
                        <th>{{$data->nisn}}</th>
                        <th>{{$data->nama}}</th>
                        <th>{{$data->alamat}}</th>
                        <th>
                            <a href="{{ route('mastersiswa.show', $data->id) }}" class="btn btn-circle btn-sm">
                                <i class="fa fa-info "></i>
                            </a>
                            <a href="{{ route('mastersiswa.edit', $data->id) }}" class="btn btn-circle btn-sm">
                                <i class="fa fa-pen "></i>
                            </a>
                            <!-- <button data-toggle="modal" data-target=".bd-example-modal-centered-update{{$data->id}}" class="btn btn-circle btn-sm">
                                <i class="fa fa-pen "></i>
                            </button>    -->
                            <button data-toggle="modal" data-target="#exampleModalCenter{{$data->id}}" class="btn btn-circle btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </th>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection