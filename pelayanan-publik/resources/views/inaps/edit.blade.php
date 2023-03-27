@extends('inaps.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('inaps.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('inaps.update',$inap->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Registrasi:</strong>
                    <input type="text" name="no_registrasi" value="{{ $inap->no_registrasi }}" class="form-control" placeholder="Nomor Registrasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Rekam Medis:</strong>
                    <input type="text" name="no_rm" value="{{ $inap->no_rm }}" class="form-control" placeholder="Nomor Rekam Medis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pasien:</strong>
                    <input type="text" name="nama_pasien" value="{{ $inap->nama_pasien }}" class="form-control" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Dokter:</strong>
                    <input type="text" name="kode_dokter" value="{{ $inap->kode_dokter }}" class="form-control" placeholder="Kode Dokter">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Dokter:</strong>
                    <input type="text" name="nama_dokter" value="{{ $inap->nama_dokter }}" class="form-control" placeholder="Nama Dokter">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Kamar:</strong>
                    <input type="text" name="no_kamar" value="{{ $inap->no_kamar }}" class="form-control" placeholder="Nomor Kamar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. Rujukan:</strong>
                    <input type="text" name="no_rujukan" value="{{ $inap->no_rujukan }}" class="form-control" placeholder="Nomor Rujukan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Masuk:</strong>
                    <input type="date" name="tgl_masuk" value="{{ $inap->tgl_masuk }}" class="form-control" placeholder="Tanggal Masuk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Keluar:</strong>
                    <input type="date" name="tgl_keluar" value="{{ $inap->tgl_keluar }}" class="form-control" placeholder="Tanggal Keluar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection