@extends('mahasiswamalindas.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show MK</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('matakuliahmalindas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode:</strong>
                {{ $matakuliahmalinda->kode_mk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama MK:</strong>
                {{ $matakuliahmalinda->nama_mk }}
            </div>
        </div>
    </div>
@endsection