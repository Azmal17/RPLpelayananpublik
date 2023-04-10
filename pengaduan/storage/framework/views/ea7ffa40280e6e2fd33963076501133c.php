<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Data Dokter</title>
  </head>
  <body>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <h1 class='text-center'>Data Rawat Jalan</h1>
    <div class="container">
      <a  href="/tambahdokter" class="btn btn-success">+ Tambah</a>
      
        <div class="row g-3 align-items-center mt-2" >
          <div class="col-auto">
            <form action="/dokter" method="GET">
            <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
            </form>
          </div>

          <div class="col-auto">
          <a  href="/exportpdf" class="btn btn-info">Export PDF</a>
          </div>

          

      </div>
      <div class="row">
        <table class="table">
          <thead>
          <tr>
            <th>No</th>
            <th>Kode Dokter</th>
            <th>Nama Dokter</th>
            <th>Foto</th>
            <th>Jenis Kelamin</th>
            <th>Spesialis</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
          ?>             
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($index + $data->firstItem()); ?> </th>
            <td><?php echo e($row->kodedokter); ?></td>
            <td><?php echo e($row->namadokter); ?></td>
            <td>
              <img src="<?php echo e(asset('fotodokter/'.$row->foto)); ?>" style="width: 50px;">
            </td>
            <td><?php echo e($row->jeniskelamin); ?></td>
            <td><?php echo e($row->alamat); ?></td>
            <td><?php echo e($row->spesialis); ?></td>
            <td>0<?php echo e($row->notelepon); ?></td>
            <td>              
              <a href="/tampilkandata/<?php echo e($row->id); ?>" class="btn btn-info">Edit</a>
              <a href="#" class="btn btn-danger delete" data-id="<?php echo e($row->id); ?>" data-nama="<?php echo e($row->namadokter); ?>">Delete</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
        </tbody>
        </table>
        <?php echo e($data->links()); ?>

      </div>
    </div>
    
      
  </body>
  <script>
      $('.delete').click( function(){
        var dokterid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        swal({ 
        title: "Yakin ?",
        text: "Kamu akan menghapus data dokter "+nama+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
      . then((willDelete) => {
        if (willDelete) {
          window.location = "/delete/"+dokterid+""
          swal("Data Berhasil DiHapus", {
            icon: "success",
           });
          } else {
          swal("Data tidak jadi dihapus");
          }
          });
      });
      
  </script>
  <script>
    <?php if(Session::has('success')): ?>
    toastr.success("<?php echo e(Session::get('success')); ?>")
    <?php endif; ?>
  </script>
</html><?php /**PATH C:\Users\lenovo\crudpp-app\resources\views/layout/main.blade.php ENDPATH**/ ?>