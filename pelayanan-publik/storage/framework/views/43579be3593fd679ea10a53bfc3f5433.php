
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pendaftaran Rawat Inap</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('inaps.create')); ?>"> Create New Data</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>No. Registrasi</th>
            <th>No. Rekam Medis</th>
            <th>Nama Pasien</th>
            <th>Kode Dokter</th>
            <th>Nama Dokter</th>
            <th>No. Kamar</th>
            <th>No. Rujukan</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $inaps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($inap->no_registrasi); ?></td>
            <td><?php echo e($inap->no_rm); ?></td>
            <td><?php echo e($inap->nama_pasien); ?></td>
            <td><?php echo e($inap->kode_dokter); ?></td>
            <td><?php echo e($inap->nama_dokter); ?></td>
            <td><?php echo e($inap->no_kamar); ?></td>
            <td><?php echo e($inap->no_rujukan); ?></td>
            <td><?php echo e($inap->tgl_masuk); ?></td>
            <td><?php echo e($inap->tgl_keluar); ?></td>
            <td>
                <form action="<?php echo e(route('inaps.destroy',$inap->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('inaps.show',$inap->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('inaps.edit',$inap->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $inaps->links(); ?>

      
<?php $__env->stopSection(); ?>

<?php echo $__env->make('inaps.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\pelayanan-publik\resources\views/inaps/index.blade.php ENDPATH**/ ?>