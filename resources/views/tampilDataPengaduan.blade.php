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
    <h1 class="text-center mb-5">Edit Data Rawat Jalan</h1>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="/updateData/{{$data->id}}" method="post" enctype="multipart/form-data">
                      @csrf 
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Pengaduan</label>
                        <input type="text" name="no_pengaduan" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data->no_pengaduan}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pengadu</label>
                        <input type="text" name="nama_pengadu" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data->nama_pengadu}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Bagian Layanan</label>
                        <select class="form-select" name="bagian_layanan" aria-label=".form-select-sm example">
                          <option selected>{{$data->bagian_layanan}}</option>
                          <option value="sdm">SDM</option>
                          <option value="inventori">Inventori</option>
                          <option value="farmasi">Farmasi</option>
                          <option value="pelayanan_publik">Pelayanan Publik</option>
                       </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data->email}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data->no_hp}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Kunjungan</label>
                        <input type="date" name="tanggal_kunjungan" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data->tanggal_kunjungan}}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Isi Pengaduan</label>
                        <input type="text" name="isi_pengaduan" value="{{$data->isi_pengaduan}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Status</label>
                        <select class="form-select" name="status" aria-label=".form-select-sm example">
                          <option selected>{{$data->status}}</option>
                          <option value="diterima">diterima</option>
                          <option value="diproses">diproses</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> 
      
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
</html>