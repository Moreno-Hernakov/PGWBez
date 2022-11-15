@extends('admin.admin')
@section('is_title', 'MasterKontak')
@section('is_title_konten', 'MasterKontak' )
@section('is_konten')
<!-- <form action="/masterkontak" method="post">
    
    <button class="btn btn-primary col-md-12 mb-3">Kirim</button>
</form> -->

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
@endif
<div class="row">
    <div class="col-lg-12">    
        <div class="card shadow mb-4"> 
            <div class="card-header bg-brown">  
                <h6 class="m-0 font-weight-bold text-primary"> 
                    <a onclick="$('.formData').slideToggle();">
                        <i class="fa fa-plus " aria-hidden="true"></i>
                    </a> &nbsp;Jenis Kontak   
                </h6> 
            </div> 
       
            <!-- FORM CREATE TABLE -->
            <div class="panel-body formData p-3">
                <form class="form">
                    @csrf
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label>Jenis Kontak</label>
                        <input type="text" class="form-control" id="jenisKontak" name="jenisKontak"/>
                    </div>
                    <a class="btn btn-warning" onclick="cancel()"><i class="fa fa-reply"></i>&nbsp;Cancel</a>
                    <button class="btn btn-primary" onclick="reqKontak()"><i class="fa fa-save"></i>&nbsp;simpan Jenis</button>
                </form>
                
            </div>
            
            <div class="card-body"> 
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-danger">
                            <tr>
                                <th width="2%" class="pl-3">#</th>
                                <th width="96%">Jenis Kontak</th>
                                <th width="2%" >action</th>
                            </tr>
                        </thead>
                        @foreach ($jenis as $data)
                        <tbody>
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$data->jenis_kontak}}</th>
                                <th class="d-flex justify-content-center">
                                    {{-- <form action="/masterkontak/create" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <button type="submit" class="btn btn-circle btn-sm">
                                            <i class="fa fa-pen "></i>
                                        </button>
                                    </form> --}}
                                    <a onclick="updateJenis({{ $data->id }})" class="btn btn-circle btn-sm">
                                        <i class="fa fa-pen "></i>
                                    </a>
                                    <a onclick="deleteJenis({{ $data->id }})" class="btn btn-circle btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    
                                    <!-- <button data-toggle="modal" data-target=".bd-example-modal-centered-update{{$data->id}}" class="btn btn-circle btn-sm">
                                        <i class="fa fa-pen "></i>
                                    </button>    -->
                                </th>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div> 
        </div> 
    </div> 
    <div class="col-lg-6">    
        <div class="card shadow mb-4"> 
            <div class="card-header bg-brown">  
                <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-user"> </i>&nbsp; Data Siswa </h6> 
            </div> 
            <div class="card-body">   
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-danger">
                            <tr>
                                <th width="2%" class="pl-3">#</th>
                                <th width="32%">NISN</th>
                                <th width="40%">Nama</th>
                                <th width="18%" >action</th>
                            </tr>
                        </thead>
                        @foreach ($datas as $data)
                        <tbody>
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$data->nisn}}</th>
                                <th>{{$data->nama}}</th>
                                <th class="d-flex">
                                    {{-- <form action="/masterkontak/create" method="get">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <button type="submit" class="btn btn-circle btn-sm">
                                            <i class="fa fa-plus "></i>
                                        </button>
                                    </form> --}}
                                    <button type="button" class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{ $data->id }}">
                                        +
                                    </button>
                                    <a onclick="show({{ $data->id }})" class="btn btn-circle btn-sm">
                                        <i class="fa fa-folder-open "></i>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div> 
            <div class="card-footer">
                {{$datas->links()}}
            </div>
        </div> 
    </div>  
    <div class="col-lg-6">    
        <div class="card shadow mb-4"> 
            <div class="card-header bg-brown">  
                <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-book"> </i> &nbsp; Kontak Siswa </h6> 
            </div> 
            <div class="card-body" id="project"> 
                
            </div> 
        </div> 
    </div>

  <!-- Modal -->
  @foreach ($datas as $item)
  <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kontak {{$item->nama}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">   
            <input type="hidden" name="siswa_id" id="siswa_id" value="{{$item->id}}"> 
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
                <input type="text" value="{{ old('deskripsi') }}" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" />
                <div class="invalid-feedback" id="ErrorDeskripsi">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="addKontak()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<script>
    window.onload = function() {+
        $('.formData').slideUp();
    }

    function cancel(){
        $('.formData').slideUp();
        $("#jenisKontak").val('')
        $(":hidden#id").val('')
    }

    function updateJenis(id){
        $.ajax({
            url: "/updatejenis",
            type:"POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{ id },
            success: res => {
                // console.log(res.data)
                    if(res.success){
                        $('.formData').slideDown();
                        $("#jenisKontak").val(res.data.jenis_kontak)
                        $("#id").val(res.data.id)
                    } 
            },
            error: error => {
                console.log(error)
            }
        });
    }

    function deleteJenis(id){
        if(confirm('hapus jenis ini?')){
            $.ajax({
                url: "/deletejenis/" + id,
                type:"POST",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: res =>{
                    // console.log(res)
                      if(res.success){
                        alert(res.messagge)
                        location.reload();
                      } 
                },
                error: error => {
                    console.log(error)
                }
            });
        }
    }
        
    function reqKontak(){
        event.preventDefault()

        let jenis = $("#jenisKontak").val()
        let id = $(":hidden#id").val();
        // console.log()

        if(jenis == "") {
            alert("jenis tidak boleh kosong")
        } else {
            $.ajax({
                url: "/addjenis",
                type:"POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{ jenis, id},
                success: res =>{
                //   console.log(res)
                if(res.success){
                    alert(res.messagge)
                    location.reload();
                } 
                },
                error: error => {
                console.log(error)
                }
            });
        } 
        
        
        
    }

    function addKontak(){
        siswa_id = $("#siswa_id").val()
        jenis_id = $("#jenis_id").val()
        deskripsi = $("#deskripsi").val()
        $.ajax({
            url: "/masterkontak",
            type:"POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{ siswa_id, jenis_id, deskripsi},
            success: res => {
                // console.log(res)
                if(res.success){
                    alert(res.messagge)
                    $('#exampleModalCenter').modal('hide');
                    location.reload();
                    // $('.formData').slideDown();
                    // $("#jenisKontak").val(res.data.jenis_kontak)
                    // $("#id").val(res.data.id)
                } 
            },
            error: error => {
                console.warn(error.responseJSON);
                $.each(error.responseJSON.errors, function (i, err) {
                // var el = $(document).find('[name="'+i+'"]');
                alert(err[0]);
                // el.after($('<span style="color: red;">'+error[0]+'</span>'));
            });
                // console.log(error)
            }
        });
        
    }

    function show(id){
        $.get('showkontak/'+id, data => $('#project').html(data));
        // alert(id)
    }


</script>
@endsection