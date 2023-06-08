@extends('mahasiswamalindas.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Nilai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nilaimalindas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama MK:</strong>
                @foreach ($kategori as $item)
                    @if ($item->id === $nilaimalinda->kategori)
                        {{ $item->nama_mk }}
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Skor:</strong>
                {{ $nilaimalinda->skor }}
            </div>
        </div>
    </div>
@endsection