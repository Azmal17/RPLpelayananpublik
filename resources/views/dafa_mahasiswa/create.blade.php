<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Tambah data mahasiswa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dafa_mahasiswa.index') }}"> Kembali</a>
                </div>
            </div>
        </div>
        <form action='{{url ('dafa_mahasiswa')}}' method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID mahasiswa:</strong>
                        <input type="number" name="id_mahasiswa" class="form-control" placeholder="IDmahasiswa">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="nama" placeholder="Nama" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis kelamin:</strong>
                        <select name="jenis_kelamin" >
                            <option selected disabled>Pilih jenis kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prodi:</strong>
                        <select name="prodi" >
                            <option selected disabled>Pilih prodi</option>
                            <option value="Teknik informatika">Teknik informatika</option>
                            <option value="Sistem informasi">Sistem informasi</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Agama:</strong>
                        <select name="agama" >
                            <option selected disabled="">Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Katolik">katolik</option>
                            <option value="Konghucu">Konghucu</option>
                        </select><br>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIK:</strong>
                        <input type="number" name="nik" placeholder="NIK" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telepon:</strong>
                        <input type="number" name="telepon" placeholder="Telepon" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        <textarea name="alamat" id=""></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
            
            
        
        </form>
    </div>
</div>
