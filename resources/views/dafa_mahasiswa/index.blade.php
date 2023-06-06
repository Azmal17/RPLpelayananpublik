<link rel="stylesheet" href="{{asset('css/uasdafa.css')}}">

<div class="padding-top1"></div>
<a href="{{ route('dafa_mahasiswa.create') }}">Tambah data</a>
<table border="1">
    <tr>
        <th>IDMahasiswa</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Prodi</th>
        <th>Agama</th>
        <th>NIK</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $row)
    <tr>
        <td>{{$row->id_mahasiswa}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->jenis_kelamin}}</td>
        <td>{{$row->prodi}}</td>
        <td>{{$row->agama}}</td>
        <td>{{$row->nik}}</td>
        <td>{{$row->telepon}}</td>
        <td>{{$row->alamat}}</td>
        <td> <a href="{{ route('dafa_mahasiswa.edit',$row->id_mahasiswa) }}"><button>Edit</button></a>
            <form action="{{ route('dafa_mahasiswa.destroy',$row->id_mahasiswa) }}" method="POST">
                @csrf
                @method ('DELETE')
                 <button type="submit">Delete</button>
            </form>
        </td>
        
    </tr>
    @endforeach
</table>


