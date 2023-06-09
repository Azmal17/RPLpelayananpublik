@extends('pengaduanusers.layout')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pengaduan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pengaduanusers.index') }}"> Kembali</a>
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
  
    <form action="{{ route('pengaduanusers.update',$pengaduanuser->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pengadu:</strong>
                    <input type="text" name="nama_pengadu" value="{{ $pengaduanuser->nama_pengadu }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $pengaduanuser->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. HP:</strong>
                    <input type="number" name="no_hp" value="{{ $pengaduanuser->no_hp }}" class="form-control" placeholder="No. HP">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Berkunjung:</strong>
                    <input type="text" name="tgl_kunjungan" value="{{ $pengaduanuser->tgl_kunjungan }}" class="form-control" placeholder="Tanggal Berkunjung">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi:</strong>
                    <input type="text" name="isi" value="{{ $pengaduanuser->isi }}" class="form-control" placeholder="Isi Pengaduan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bagian Layanan:</strong>
                    <select name="bagian" class="form-control">
                    <option selected disabled>Pilih Bagian Layanan</option>
                        <option value="SDM">SDM</option>
                        <option value="Inventori">Inventori</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Pelayanan Publik">Pelayanan Publik</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Pengaduan:</strong>
                    <select name="status" class="form-control">
                    <option selected disabled>Pilih Status Pengaduan</option>
                        <option value="diterima">Diterima</option>
                        <option value="diproses">Diproses</option>
                    </select>
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $pengaduanuser->detail }}</textarea>
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection