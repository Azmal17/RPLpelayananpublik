<h1>Data Mahasiswa Baru</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf
    <input type="text" name="NIM" placeholder="Masukkan NIM"><br>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    <input type="text" name="jurusan" placeholder="Masukkan Jurusan"><br>
    <input type="email" name="email" placeholder="Masukkan Email"><br>
    <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir"><br>
    <input type="number" name="tlp" placeholder="Masukkan Telepon"><br>
    <textarea name="alamat" id="" cols="30" rows="10" placeholder="Masukkan Alamat"></textarea><br>
    <select name="jenis_kelamin" id="">
        <option value="">== Pilih jenis Kelamin ==</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <select name="agama" id=" ">
        <option value="">== Pilih Agama ==</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghucu">Konghucu</option>
    </select><br>
    <input type="number" name="NIK" placeholder="Masukkan NIK"><br>
    <input type="submit" value="Simpan">

</form>
