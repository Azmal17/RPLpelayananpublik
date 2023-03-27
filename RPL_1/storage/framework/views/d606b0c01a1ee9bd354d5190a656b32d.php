
  
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Patient</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('patients.index')); ?>"> Back</a>
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
   
<form action="<?php echo e(route('patients.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
  
     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No RM:</strong>
                <input type="text" name="no_rm" class="form-control" placeholder="No RM">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Asuransi:</strong>
                <input type="text" name="no_asuransi" class="form-control" placeholder="Nomor Asuransi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <input type="text" name="nama_pasien" class="form-control" placeholder="Nama Pasien">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Umur:</strong>
                <input type="text" name="umur" class="form-control" placeholder="Umur">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Pasien:</strong>
                <input type="text" name="alamat_pasien" class="form-control" placeholder="Alamat Pasien">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Golongan Darah:</strong>
                <input type="text" name="gol_darah" class="form-control" placeholder="Golongan Darah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon:</strong>
                <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama:</strong>
                <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Kawin:</strong>
                <input type="text" name="status_kawin" class="form-control" placeholder="Status Kawin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('patients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RPL_1\resources\views/patients/create.blade.php ENDPATH**/ ?>