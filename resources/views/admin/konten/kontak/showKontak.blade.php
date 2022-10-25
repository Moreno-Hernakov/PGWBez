{{-- DELETE MODAL --}}
@foreach ($datas as $deleteModal)
    <div class="modal fade" id="deleteModal{{$deleteModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">hapus data?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{$deleteModal->jenis->jenis_kontak}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button>
                    <button type="button" class="btn btn-danger" onclick="deletekontak({{$deleteModal->id}})" ><i class="fa fa-trash"></i>&nbsp;hapus</button>
                    {{-- <a href="/deleteProject/{{$deleteModal->id}}" class="btn btn-danger"><i class="fas fa-trash-o">&nbsp; hapus</i></a> --}}
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- UPDATE MODAL-->
@foreach ($datas as $updateModal)
<div class="modal fade" id="updateModal{{$updateModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Kontak {{$updateModal->nama}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">   
            {{-- <input type="hidden" name="siswa_id" id="siswa_id" value="{{$updateModal->id}}">  --}}
            <div class="form-group form-floating">
                <label>Jenis Kontak</label>
                <select name="jenis_id" id="jenis_id{{$updateModal->id}}" class="form-control">
                    <option selected="selected">{{$updateModal->jenis->jenis_kontak}}</option>
                    @foreach($jenis as $p)
                    <option value="{{$p->id}}">{{$p->jenis_kontak}}</option>
                    @endforeach
                </select>
            </div>         
            <div class="form-group form-floating">
                <label>Deskripsi</label>
                <input type="text" value="{{ $updateModal->deskripsi}}" class="form-control" name="deskripsi" id="deskripsi{{$updateModal->id}}" />
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="update({{$updateModal->id}})">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endforeach

{{-- SHOW KONTAK SISWA --}}
@foreach($datas as $p)
    <div class="card mb-4">
        <div class="card-header">
            <strong>{{$p->jenis->jenis_kontak}}</strong>
        </div>

        <div class="card-body" style="margin-bottom: -18px ">
            <p>{{$p->deskripsi}}</p>
        </div>

        <div class="card-footer">
            {{-- <a href="/editProject/{{$p->id}}" class="btn btn-sm btn-warning mr-1"><i class="fas fa-edit">&nbsp; Edit</i></a> --}}
            <button data-toggle="modal" data-target="#updateModal{{$p->id}}"  class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>&nbsp; Edit</button>
            <button data-toggle="modal" data-target="#deleteModal{{$p->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp; Hapus</button>
        </div>
    </div>
@endforeach

<script>
    function deletekontak(id){
        // alert(id)
        $.ajax({
            url: "/masterkontak/"+id,
            type:"DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: res => {
                // console.log(res)
                if(res.success){
                    alert(res.messagge)
                    $('#deleteModal'+id).modal('hide');
                    location.reload();
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
    function update(id){
        // alert(id)
        jenis_id = $("#jenis_id"+id).val()
        deskripsi = $("#deskripsi"+id).val()
        $.ajax({
            url: "/masterkontak/"+id,
            type:"PUT",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{ jenis_id, deskripsi},
            success: res => {
                console.log(res)
                if(res.success){
                    alert(res.messagge)
                    $('#updateModal'+id).modal('hide');
                    location.reload();
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
</script>