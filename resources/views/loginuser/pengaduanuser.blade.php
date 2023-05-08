@extends('layouts.main')

@section('container')
<div class="contet-wrapper"></div>
  <h1 class="text-center mb-5">Pengaduan Rumah Sakit ROSATI</h1>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertDataPengaduan" method="post" enctype="multipart/form-data">
                @csrf 
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama_pengadu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
@endsection