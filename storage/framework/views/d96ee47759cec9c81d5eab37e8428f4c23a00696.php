<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deleteModal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="exampleModalCenter<?php echo e($deleteModal->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">hapus data?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo e($deleteModal->nama_project); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button>
                    <a href="/deleteProject/<?php echo e($deleteModal->id); ?>" class="btn btn-danger"><i class="fas fa-trash-o">&nbsp; hapus</i></a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-4">
    <div class="card-header">
        <strong><?php echo e($p->nama_project); ?></strong>
    </div>

    <div class="card-body">

        <strong>Tanggal Project : </strong>
        <p><?php echo e($p->tanggal); ?></p>
        <strong> Deskripsi : </strong>
        <p><?php echo e($p->deskripsi); ?></p>

    </div>

    <div class="card-footer">
        <a href="/editProject/<?php echo e($p->id); ?>" class="btn btn-sm btn-warning mr-1"><i class="fas fa-edit">&nbsp; Edit</i></a>
        <button data-toggle="modal" data-target="#exampleModalCenter<?php echo e($p->id); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp; Hapus</button>
    </div>
 </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\Reno\PgwbTaskEz\resources\views/admin/konten/project/showProject.blade.php ENDPATH**/ ?>