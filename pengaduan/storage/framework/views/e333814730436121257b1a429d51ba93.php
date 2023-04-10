<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title>CRUD Tim 2</title>
  </head>
  <body>
    <h1 class="text-center mb-5">Data Rawat Jalan</h1>
        <div class="container">
            <div class="row">
              <form class="row g-3" action="/rawatJalan" method="GET">
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden">Cari</label>
                    <input type="search" class="form-control" name="search" id="inputPassword2" placeholder="Cari">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Search</button>
                </div>
              </form>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Nomor Rekam Medis</th>
                        <th scope="col">Nomor Reg Rawat Jalan</th>
                        <th scope="col">Nomor Rujukan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>

                    <tbody class="table-group-divider">
                      <?php 
                        $no =1;
                      ?>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($no++); ?></th>
                        <td><?php echo e($row-> nama_pasien); ?></td>
                        <td><?php echo e($row-> no_rm); ?></td>
                        <td><?php echo e($row->no_registrasi_rj); ?></td>
                        <td><?php echo e($row->no_rujukan); ?></td>
                        <td>
                        <a href="/tampilkanData/<?php echo e($row->id); ?>" class="btn btn-warning">Edit</a>
                        <a href="/delete/<?php echo e($row->id); ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    
                  </table>
            </div> 
            <a href='/tambahData' class="btn btn-success mb-3">Tambah</a>
            <?php if($message = Session::get('success')): ?>
              <div class="alert alert-success" role="alert">
                <?php echo e($message); ?>

              </div>
            <?php endif; ?>  
        </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\Users\lenovo\crudpp-app\resources\views/dataRawatJalan.blade.php ENDPATH**/ ?>