
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deleteModal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="deleteModal<?php echo e($deleteModal->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">hapus data?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo e($deleteModal->jenis->jenis_kontak); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button>
                    <button type="button" class="btn btn-danger" onclick="deletekontak(<?php echo e($deleteModal->id); ?>)" ><i class="fa fa-trash"></i>&nbsp;hapus</button>
                    
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- UPDATE MODAL-->
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $updateModal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="updateModal<?php echo e($updateModal->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Kontak <?php echo e($updateModal->nama); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">   
            
            <div class="form-group form-floating">
                <label>Jenis Kontak</label>
                <select name="jenis_id" id="jenis_id<?php echo e($updateModal->id); ?>" class="form-control">
                    <option selected="selected"><?php echo e($updateModal->jenis->jenis_kontak); ?></option>
                    <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($p->id); ?>"><?php echo e($p->jenis_kontak); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>         
            <div class="form-group form-floating">
                <label>Deskripsi</label>
                <input type="text" value="<?php echo e($updateModal->deskripsi); ?>" class="form-control" name="deskripsi" id="deskripsi<?php echo e($updateModal->id); ?>" />
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="update(<?php echo e($updateModal->id); ?>)">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-4">
        <div class="card-header">
            <strong><?php echo e($p->jenis->jenis_kontak); ?></strong>
        </div>

        <div class="card-body" style="margin-bottom: -18px ">
            <p><?php echo e($p->deskripsi); ?></p>
        </div>

        <div class="card-footer">
            
            <button data-toggle="modal" data-target="#updateModal<?php echo e($p->id); ?>"  class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>&nbsp; Edit</button>
            <button data-toggle="modal" data-target="#deleteModal<?php echo e($p->id); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp; Hapus</button>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
</script><?php /**PATH C:\Users\Reno\PgwbTaskEz\resources\views/admin/konten/kontak/showKontak.blade.php ENDPATH**/ ?>