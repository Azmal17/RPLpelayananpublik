
   
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('inaps.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
   
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
  
    <form action="<?php echo e(route('inaps.update',$inap->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Registrasi:</strong>
                    <input type="text" name="no_registrasi" value="<?php echo e($inap->no_registrasi); ?>" class="form-control" placeholder="Nomor Registrasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Rekam Medis:</strong>
                    <input type="text" name="no_rm" value="<?php echo e($inap->no_rm); ?>" class="form-control" placeholder="Nomor Rekam Medis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pasien:</strong>
                    <input type="text" name="nama_pasien" value="<?php echo e($inap->nama_pasien); ?>" class="form-control" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Dokter:</strong>
                    <input type="text" name="kode_dokter" value="<?php echo e($inap->kode_dokter); ?>" class="form-control" placeholder="Kode Dokter">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Dokter:</strong>
                    <input type="text" name="nama_dokter" value="<?php echo e($inap->nama_dokter); ?>" class="form-control" placeholder="Nama Dokter">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Kamar:</strong>
                    <input type="text" name="no_kamar" value="<?php echo e($inap->no_kamar); ?>" class="form-control" placeholder="Nomor Kamar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Rujukan:</strong>
                    <input type="text" name="no_rujukan" value="<?php echo e($inap->no_rujukan); ?>" class="form-control" placeholder="Nomor Rujukan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Masuk:</strong>
                    <input type="date" name="tgl_masuk" value="<?php echo e($inap->tgl_masuk); ?>" class="form-control" placeholder="Tanggal Masuk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Keluar:</strong>
                    <input type="date" name="tgl_keluar" value="<?php echo e($inap->tgl_keluar); ?>" class="form-control" placeholder="Tanggal Keluar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inaps.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\pelayanan-publik\resources\views/inaps/edit.blade.php ENDPATH**/ ?>