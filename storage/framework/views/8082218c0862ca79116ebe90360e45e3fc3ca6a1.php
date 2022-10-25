
<?php $__env->startSection('is_title', 'MasterSiswa'); ?>
<?php $__env->startSection('is_title_konten', 'MasterSiswa' ); ?>
<?php $__env->startSection('is_konten'); ?>
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
                    <?php echo csrf_field(); ?>      
                                        
                    <div class="form-group form-floating">
                        <label>Nama</label>
                        <input type="text" value="<?php echo e(old('nama')); ?>" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama" />
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text" value="<?php echo e(old('nisn')); ?>"  class="form-control  <?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nisn" />
                        <?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" value="<?php echo e(old('alamat')); ?>"  class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamat" />
                        <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Foto Siswa</label>
                        <input type="file" value="<?php echo e(old('foto')); ?>" class="form-control-file <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="foto" />
                        <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label> 
                        <select value="<?php echo e(old('jk')); ?>" class="form-select form-control" id="jk" name="jk">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <textarea class="form-control <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="about" /><?php echo e(old('about')); ?></textarea>
                        <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                    <?php echo e($deleteModal->nama); ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-reply"></i>&nbsp;Close</button>
                    <form action="mastersiswa/<?php echo e($deleteModal->id); ?>" method="post" style="display:inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger"><i class='fa fa-trash-o'></i>&nbsp;hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php elseif(session()->has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show col-md-4 m-3" style="z-index: 100 !important; position:absolute; right: 25px;" role="alert">
        <i class="fa fa-exclamation-triangle"></i> &nbsp;
        <strong>[ERROR] </strong>
        <?php echo e(session('error')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>  
<?php endif; ?> 
    


<!-- TABLE DATA + CRUD -->
<div class="card shadow mb-4 " style="z-index: 1;  position:relative;">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">Table Siswa</h6> -->
        <a href="<?php echo e(route('mastersiswa.create')); ?>" class="btn btn-info">
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
                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <th><?php echo e($loop->iteration); ?></th>
                        <th> 
                            <img src="<?php echo e(asset('storage/'.$data->foto)); ?>"  style="width:40px; height: 40px;" class=" rounded-circle"> 
                        </th>
                        <th><?php echo e($data->nisn); ?></th>
                        <th><?php echo e($data->nama); ?></th>
                        <th><?php echo e($data->alamat); ?></th>
                        <th>
                            <a href="<?php echo e(route('mastersiswa.show', $data->id)); ?>" class="btn btn-circle btn-sm">
                                <i class="fa fa-info "></i>
                            </a>
                            <a href="<?php echo e(route('mastersiswa.edit', $data->id)); ?>" class="btn btn-circle btn-sm">
                                <i class="fa fa-pen "></i>
                            </a>
                            <!-- <button data-toggle="modal" data-target=".bd-example-modal-centered-update<?php echo e($data->id); ?>" class="btn btn-circle btn-sm">
                                <i class="fa fa-pen "></i>
                            </button>    -->
                            <button data-toggle="modal" data-target="#exampleModalCenter<?php echo e($data->id); ?>" class="btn btn-circle btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </th>
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reno\PgwbTaskEz\resources\views/admin/konten/MasterSiswa.blade.php ENDPATH**/ ?>