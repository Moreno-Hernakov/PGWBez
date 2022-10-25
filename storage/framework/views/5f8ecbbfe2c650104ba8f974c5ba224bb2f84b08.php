
<?php $__env->startSection('is_title', 'MasterProject'); ?>
<?php $__env->startSection('is_title_konten', 'MasterProject' ); ?>
<?php $__env->startSection('is_konten'); ?>
<!-- ALERT DATA -->
<?php if(session()->has('success')): ?> 
    <div class="alert alert-success alert-dismissible fade show col-md-3 m-3" style="z-index: 100 !important; position:absolute; right: 25px;" role="alert">
        <i class="fa fa-check-circle"></i> &nbsp;
        <strong>[INFO] </strong>
        <?php echo e(session('success')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> 
<?php endif; ?>
<div class="row">
    <div class="col-lg-6">    
        <div class="card shadow mb-4"> 
            <div class="card-header bg-brown">  
                <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-user"> </i>&nbsp; Data Siswa </h6> 
            </div> 
            <div class="card-body">   
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-info">
                            <tr>
                                <th width="2%" class="pl-3">#</th>
                                <th width="32%">NISN</th>
                                <th width="40%">Nama</th>
                                <th width="18%" >action</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <th><?php echo e($loop->iteration); ?></th>
                                <th><?php echo e($data->nisn); ?></th>
                                <th><?php echo e($data->nama); ?></th>
                                <th>
                                    <a href="addProject/<?php echo e($data->id); ?>" class="btn btn-circle btn-sm">
                                        <i class="fa fa-plus "></i>
                                    </a>
                                    <a onclick="show(<?php echo e($data->id); ?>)" class="btn btn-circle btn-sm">
                                        <i class="fa fa-folder-open "></i>
                                    </a>
                                    
                                    <!-- <button data-toggle="modal" data-target=".bd-example-modal-centered-update<?php echo e($data->id); ?>" class="btn btn-circle btn-sm">
                                        <i class="fa fa-pen "></i>
                                    </button>    -->
                                </th>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div> 
            <div class="card-footer">
                <?php echo e($datas->links()); ?>

            </div>
        </div> 
    </div>  
    <div class="col-lg-6">    
        <div class="card shadow mb-4"> 
            <div class="card-header bg-brown">  
                <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-book"> </i> &nbsp; Project Siswa </h6> 
            </div> 
            <div class="card-body" id="project"> 
                
            </div> 
        </div> 
    </div>  
</div>
<script>
    function show(id){
        $.get('getData/'+id, data => $('#project').html(data));
        // alert(id)
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reno\PgwbTaskEz\resources\views/admin/konten/masterProject.blade.php ENDPATH**/ ?>