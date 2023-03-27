
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pendaftaran Pasien</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('patients.create')); ?>"> Create New Patient</a>
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
            <th>No RM </th>
            <th>Nomor Asuransi</th>
            <th>Nama Pasien</th>
            <th>Umur</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Pasien</th>
            <th>Golongan Darah</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Agama</th>
            <th>Status Kawin</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($patient->no_rm); ?></td>
            <td><?php echo e($patient->no_asuransi); ?></td>
            <td><?php echo e($patient->nama_pasien); ?></td>
            <td><?php echo e($patient->umur); ?></td>
            <td><?php echo e($patient->tanggal_lahir); ?></td>
            <td><?php echo e($patient->jenis_kelamin); ?></td>
            <td><?php echo e($patient->alamat_pasien); ?></td>
            <td><?php echo e($patient->gol_darah); ?></td>
            <td><?php echo e($patient->no_telp); ?></td>
            <td><?php echo e($patient->email); ?></td>
            <td><?php echo e($patient->agama); ?></td>
            <td><?php echo e($patient->status_kawin); ?></td>
            <td>
                <form action="<?php echo e(route('patients.destroy',$patient->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('patients.show',$patient->id)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('patients.edit',$patient->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $patients->links(); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('patients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RPL_1\resources\views/patients/index.blade.php ENDPATH**/ ?>