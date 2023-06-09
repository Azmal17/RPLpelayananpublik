@extends('layouts.main')

@section('container')
    <div class="padding-top1">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Menampilkan Pengaduan</h2>
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pengaduanusers.index') }}"> Back</a>
            </div> --}}
        </div>
    </div>
    <div class="content-wrapper ">
        <div class="form-signin w-100 m-auto border shadow p-3 mb-5 bg-light rounded border-2">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Pengadu:</strong>
                        {{ $pengaduanuser->nama_pengadu }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $pengaduanuser->email }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No. HP:</strong>
                        {{ $pengaduanuser->no_hp }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Berkunjung:</strong>
                        {{ $pengaduanuser->tgl_kunjungan }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Isi:</strong>
                        {{ $pengaduanuser->isi }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bagian Layanan:</strong>
                        {{ $pengaduanuser->bagian }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Pengaduan:</strong>
                        {{ $pengaduanuser->status }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{ $pengaduanuser->detail }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/index" class="btn btn-primary"> Home</a>
@endsection
