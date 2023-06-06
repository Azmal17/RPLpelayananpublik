@extends('mhsgege.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mhsgege.index') }}"> Back</a>
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
  
    <form action="{{ route('mhsgege.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIM :</strong>
                <input type="number" name="nim" class="form-control" placeholder="NIM">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" class="form-control" name="nama_mhs" placeholder="Nama"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Jenis Kelamin:</strong>
            <select name="jk" class="form-control">
            <option selected disabled>.:: Pilih Jenis Kelamin ::.</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prodi:</strong>
                <input type="text" class="form-control" name="prodi" placeholder="Prodi"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Agama:</strong>
            <select name="agama" class="form-control">
            <option selected disabled>.:: Pilih Agama ::.</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIK:</strong>
                <input type="number" class="form-control" name="nik" placeholder="NIK"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telepon:</strong>
                <input type="number" class="form-control" name="telp" placeholder="Telepon"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
   
    </form>
@endsection