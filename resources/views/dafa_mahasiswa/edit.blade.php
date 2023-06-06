<a href="{{ route('dafa_mahasiswa.index') }}">Kembali</a>
<form action='{{ route('dafa_mahasiswa.update',$mahasiswa->id_mahasiswa) }}' method="POST">
    @method('PUT')
    @csrf
    <input type="number" name="id_mahasiswa" placeholder="IDmahasiswa" value="{{$mahasiswa->id_mahasiswa}}"><br>
    <input type="text" name="nama" placeholder="Nama" value="{{$mahasiswa->nama}}"><br>
    <select name="jenis_kelamin" >
        <option value="">Pilih jenis kelamin</option>
        <option value="Pria" @if ($mahasiswa->jenis_kelamin == "Pria") selected @endif >Pria</option>
        <option value="Wanita" @if ($mahasiswa->jenis_kelamin == "Wanita")selected @endif >Wanita</option>
    </select><br>
    <select name="prodi" >
        <option value="">Pilih prodi</option>
        <option value="Teknik informatika" @if ($mahasiswa->prodi == "Teknik informatika") selected @endif >Teknik informatika</option>
        <option value="Sistem informasi" @if ($mahasiswa->prodi == "Sistem informasi") selected @endif >Sistem informasi</option>
    </select><br>
    <select name="agama" >
        <option value="">Pilih agama</option>
        <option value="Islam" @if ($mahasiswa->agama == "Islam") selected @endif >Islam</option>
        <option value="Kristen" @if ($mahasiswa->agama == "Kristen") selected @endif >Kristen</option>
        <option value="Buddha" @if ($mahasiswa->agama == "Buddha") selected @endif >Buddha</option>
        <option value="Katolik" @if ($mahasiswa->agama == "Katolik") selected @endif >Katolik</option>
        <option value="Konghucu" @if ($mahasiswa->agama == "Konghucu") selected @endif >Konghucu</option>
    </select><br>
    <input type="number" name="nik" placeholder="NIK" value="{{$mahasiswa->nik}}"><br>
    <input type="number" name="telepon" placeholder="Telepon" value="{{$mahasiswa->telepon}}"><br>
    <div>Alamat<div>
    <textarea name="alamat" id="" cols="30" rows="10">{{$mahasiswa->alamat}}</textarea>
    <input type="submit" value="Submit">

</form>