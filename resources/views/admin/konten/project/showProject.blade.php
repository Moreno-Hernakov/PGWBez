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
                    {{$deleteModal->nama_project}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button>
                    <a href="/deleteProject/{{$deleteModal->id}}" class="btn btn-danger"><i class="fas fa-trash-o">&nbsp; hapus</i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
@foreach($datas as $p)
<div class="card mb-4">
    <div class="card-header">
        <strong>{{$p->nama_project}}</strong>
    </div>

    <div class="card-body">

        <strong>Tanggal Project : </strong>
        <p>{{$p->tanggal}}</p>
        <strong> Deskripsi : </strong>
        <p>{{$p->deskripsi}}</p>

    </div>

    <div class="card-footer">
        <a href="/editProject/{{$p->id}}" class="btn btn-sm btn-warning mr-1"><i class="fas fa-edit">&nbsp; Edit</i></a>
        <button data-toggle="modal" data-target="#exampleModalCenter{{$p->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp; Hapus</button>
    </div>
 </div>
@endforeach