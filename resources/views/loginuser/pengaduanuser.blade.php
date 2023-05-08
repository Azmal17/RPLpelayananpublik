@extends('layouts.main')

@section('container')
<div class="padding-top1">
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Pengaduan Rumah Sakit ROSATI</h2>
          </div>
      </div>

      <form action="{{ route('pengaduanstore') }}" method="POST">
          @csrf
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Nama Lengkap:</strong>
              <input type="text" name="nama_pasien" class="form-control" placeholder="Nama Pasien">
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
              <strong>Email:</strong>
              <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal Kunjungan:</strong>
            <input type="date" name="tanggal_kunjungan" class="form-control" placeholder="Tanggal Kunjungan">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" href="/pilihklinik" class="btn btn-primary">Submit</button>
      </div>
  </div>

  </form>
</div>
@endsection