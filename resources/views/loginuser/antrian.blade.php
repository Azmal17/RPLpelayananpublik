@extends('layouts.main')

@section('container')
<div class="card text-center">
  <div class="card-header">
    Pendaftaran Rawat Jalan
  </div>
  <div class="card-body">
    <h5 class="card-title">Nomor Antrian</h5>
    <h3>Nomor Antrian</h3>
    <h2>{{$no_antrian}}</h2>
    <h3>Tanggal Kunjungan</h3>
    <h2>{{$tanggal_kunjungan}}</h2>
    <h3>Klinik</h3>
    <h2>{{$klinik}}</h2>
    <a href="#" class="btn btn-primary">Download</a>
  </div>
</div>
@endsection