@extends('layouts.main')

@section('content')
<div class="contet-wrapper"></div>
  <h1 class="text-center mb-5">Tambah Data Pengaduan</h1>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertDataPengaduan" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Pengadu</label>
                  <input type="text" name="nama_pengadu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Bagian Layanan</label>
                  <select class="form-select" name="bagian_layanan" aria-label=".form-select-sm example">
                    <option selected>Pilih Bagian</option>
                    <option value="sdm">SDM</option>
                    <option value="inventori">Inventori</option>
                    <option value="farmasi">Farmasi</option>
                    <option value="pelayanan_publik">Pelayanan Publik</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                  <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Tanggal Kunjungan</label>
                  <input type="date" name="tanggal_kunjungan" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Isi Pengaduan</label>
                  <input type="text" name="isi_pengaduan" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div> 
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    
@endsection