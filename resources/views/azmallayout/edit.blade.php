<h1>Data Mahasiswa Baru</h1>

<form action="/mahasiswa/{{ $mahasiswa -> NIM }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="NIM" placeholder="Masukkan NIM" value="{{ $mahasiswa -> NIM }}"><br>
    <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $mahasiswa -> nama }}"><br>
    <input type="text" name="jurusan" placeholder="Masukkan Jurusan" value="{{ $mahasiswa -> jurusan }}"><br>
    <input type="email" name="email" placeholder="Masukkan Email" value="{{ $mahasiswa -> email }}"><br>
    <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ $mahasiswa -> tanggal_lahir }}"><br>
    <input type="number" name="tlp" placeholder="Masukkan Telepon" value="{{ $mahasiswa -> tlp }}"><br>
    <textarea name="alamat" id="" cols="30" rows="10" {{ $mahasiswa -> alamat }} placeholder="Masukkan Alamat" ></textarea><br>
    <select name="jenis_kelamin" id="" value="{{ $mahasiswa -> jenis_kelamin }}">
        <option value="">== Pilih jenis Kelamin ==</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <select name="agama" id=" " value="{{ $mahasiswa -> agama }}">
        <option value="">== Pilih Agama ==</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</opt ion>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghucu">Konghucu</option>
    </select><br>
    <input type="number" name="NIK" placeholder="Masukkan NIK" value="{{ $mahasiswa -> NIK }}"><br>
    <input type="submit" value="Simpan">

</form>
