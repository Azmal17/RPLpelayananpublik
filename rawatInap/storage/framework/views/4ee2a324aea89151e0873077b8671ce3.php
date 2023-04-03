
  
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('inaps.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. Registrasi:</strong>
                <?php echo e($inap->no_registrasi); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. Rekam Medis:</strong>
                <?php echo e($inap->no_rm); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <?php echo e($inap->nama_pasien); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Dokter:</strong>
                <?php echo e($inap->kode_dokter); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Dokter:</strong>
                <?php echo e($inap->nama_dokter); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. Kamar:</strong>
                <?php echo e($inap->no_kamar); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. Rujukan:</strong>
                <?php echo e($inap->no_rujukan); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                <?php echo e($inap->tgl_masuk); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Keluar:</strong>
                <?php echo e($inap->tgl_keluar); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('inaps.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\pelayanan-publik\resources\views/inaps/show.blade.php ENDPATH**/ ?>