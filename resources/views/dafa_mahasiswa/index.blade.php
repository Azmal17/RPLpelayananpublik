<link rel="stylesheet" href="{{asset('css/uasdafa.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-center">
                    <h1>Data Mahasiswa</h1>
                </div>
                <div class="pull-right">
                    <a href="{{ route('dafa_mahasiswa.create') }}">Tambah data</a>               
                </div>
            </div>
        </div>
        <table class="table table-bordered">
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
                <td> <a href="{{ route('dafa_mahasiswa.edit',$row->id_mahasiswa) }}"><button class="btn btn-primary">Edit</button></a>
                    <form action="{{ route('dafa_mahasiswa.destroy',$row->id_mahasiswa) }}" method="POST">
                        @csrf
                        @method ('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </table>
    </div>
</div>



