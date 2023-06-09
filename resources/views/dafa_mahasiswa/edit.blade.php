<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit data mahasiswa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dafa_mahasiswa.index') }}"> Kembali</a>
                </div>
            </div>
        </div>
        <form action='{{ route('dafa_mahasiswa.update',$mahasiswa->id_mahasiswa) }}' method="POST">
            @method('PUT')
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID mahasiswa:</strong>
                    <input type="number" name="id_mahasiswa" placeholder="IDmahasiswa" value="{{$mahasiswa->id_mahasiswa}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" placeholder="Nama" value="{{$mahasiswa->nama}}"><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis kelamin:</strong>
                    <select name="jenis_kelamin"  class="form-control">
                        <option selected disabled>Pilih jenis kelamin</option>
                        <option value="Pria" @if ($mahasiswa->jenis_kelamin == "Pria") selected @endif >Pria</option>
                        <option value="Wanita" @if ($mahasiswa->jenis_kelamin == "Wanita")selected @endif >Wanita</option>
                    </select>               
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prodi:</strong>
                    <select name="prodi" class="form-control" >
                        <option selected disabled>Pilih prodi</option>
                        <option value="Teknik informatika" @if ($mahasiswa->prodi == "Teknik informatika") selected @endif >Teknik informatika</option>
                        <option value="Sistem informasi" @if ($mahasiswa->prodi == "Sistem informasi") selected @endif >Sistem informasi</option>
                    </select>             
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama:</strong>
                    <select name="agama" >
                        <option selected disabled>Pilih agama</option>
                        <option value="Islam" @if ($mahasiswa->agama == "Islam") selected @endif >Islam</option>
                        <option value="Kristen" @if ($mahasiswa->agama == "Kristen") selected @endif >Kristen</option>
                        <option value="Buddha" @if ($mahasiswa->agama == "Buddha") selected @endif >Buddha</option>
                        <option value="Katolik" @if ($mahasiswa->agama == "Katolik") selected @endif >Katolik</option>
                        <option value="Konghucu" @if ($mahasiswa->agama == "Konghucu") selected @endif >Konghucu</option>
                    </select>      
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK:</strong>
                    <input type="number" name="nik" placeholder="NIK" value="{{$mahasiswa->nik}}" class="form-control"><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telepon:</strong>
                    <input type="number" name="telepon" placeholder="Telepon" value="{{$mahasiswa->telepon}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="{{$mahasiswa->alamat}}">                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        
        </form>
    </div>
</div>
