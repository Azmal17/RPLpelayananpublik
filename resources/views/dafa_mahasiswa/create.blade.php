<form action='{{url ('dafa_mahasiswa')}}' method="POST">
    @csrf
    <input type="number" name="id_mahasiswa" placeholder="IDmahasiswa"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <select name="jenis_kelamin" >
        <option value="">Pilih jenis kelamin</option>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
    </select><br>
    <select name="prodi" >
        <option value="">Pilih prodi</option>
        <option value="Teknik informatika">Teknik informatika</option>
        <option value="Sistem informasi">Sistem informasi</option>
    </select><br>
    <select name="agama" >
        <option value="">Pilih agama</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Buddha">Buddha</option>
        <option value="Katolik">katolik</option>
        <option value="Konghucu">Konghucu</option>
    </select><br>
    <input type="number" name="nik" placeholder="NIK"><br>
    <input type="number" name="telepon" placeholder="Telepon"><br>
    <div>Alamat<div>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">

</form>