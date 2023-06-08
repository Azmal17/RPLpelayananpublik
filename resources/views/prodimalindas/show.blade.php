@extends('mahasiswamalindas.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Prodi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('prodimalindas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode:</strong>
                {{ $prodimalinda->kode_prodi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Prodi:</strong>
                {{ $prodimalinda->nama_prodi }}
            </div>
        </div>
    </div>
@endsection