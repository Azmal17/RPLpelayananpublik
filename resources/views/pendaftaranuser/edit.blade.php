@extends('layouts.main')
   
@section('container')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Patient</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
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
  
    <form action="{{ route('patients.update',$patient->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No RM:</strong>
                    <input type="text" name="no_rm" value="{{ $patient->no_rm }}" class="form-control" placeholder="No RM">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Asuransi:</strong>
                    <input type="text" name="no_asuransi" value="{{ $patient->no_asuransi }}" class="form-control" placeholder="Nomor Asuransi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pasien:</strong>
                    <input type="text" name="nama_pasien" value="{{ $patient->nama_pasien }}" class="form-control" placeholder="Nama Pasien">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Umur:</strong>
                    <input type="text" name="umur" value="{{ $patient->umur }}" class="form-control" placeholder="Umur">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Lahir:</strong>
                    <input type="text" name="tanggal_lahir" value="{{ $patient->tanggal_lahir}}" class="form-control" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <input type="text" name="jenis_kelamin" value="{{ $patient->jenis_kelamin }}" class="form-control" placeholder="Jenis Kelamin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Pasien:</strong>
                    <input type="text" name="alamat_pasien" value="{{ $patient->alamat_pasien}}" class="form-control" placeholder="Alamat Pasien">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Golongan Darah:</strong>
                    <input type="text" name="gol_darah" value="{{ $patient->gol_darah }}" class="form-control" placeholder="Golongan Darah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Telepon:</strong>
                    <input type="text" name="no_telp" value="{{ $patient->no_telp }}" class="form-control" placeholder="Nomor Telepon">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $patient->email}}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama:</strong>
                    <input type="text" name="agama" value="{{ $patient->agama}}" class="form-control" placeholder="Agama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Kawin:</strong>
                    <input type="text" name="status_kawin" value="{{ $patient->status_kawin}}" class="form-control" placeholder="Status Kawin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection