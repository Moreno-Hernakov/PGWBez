
<?php $__env->startSection('is_title', 'Add Kontak'); ?>
<?php $__env->startSection('is_title_konten', 'Add Kontak / '. $data->nama ); ?>
<?php $__env->startSection('is_konten'); ?>
<div class="col-md-8 card shadow pt-3">
    <form action="/masterkontak" method="post" >
        <?php echo csrf_field(); ?>      
        <input type="hidden" name="siswa_id" value="<?php echo e($data->id); ?>"> 
        <div class="form-group form-floating">
            <label>Jenis Kontak</label>
            <select name="jenis_id" id="jenis_id" class="form-control">
                <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($p->id); ?>"><?php echo e($p->jenis_kontak); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
        </div>         
        <div class="form-group form-floating">
            <label>Deskripsi</label>
            <input type="text" value="<?php echo e(old('deskripsi')); ?>" class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deskripsi" />
            <?php $__errorArgs = ['nama_project'];
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
            <a href="/masterkontak" class="btn btn-warning" ><i class="fa fa-reply"></i>&nbsp;Cancel</a>
            <button class="btn btn-success" ><i class="fa fa-save"></i>&nbsp;Tambah Kontak</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reno\PgwbTaskEz\resources\views/admin/konten/kontak/addKontak.blade.php ENDPATH**/ ?>