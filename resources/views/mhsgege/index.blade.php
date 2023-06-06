@extends('mhsgege.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mhsgege.create') }}"> Tambah Data </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Prodi</th>
            <th>Agama</th>
            <th>NIK</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $maba)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $maba->nim }}</td>
            <td>{{ $maba->nama_mhs }}</td>
            <td>{{ $maba->tgl_lahir }}</td>
            <td>{{ $maba->jk }}</td>
            <td>{{ $maba->prodi }}</td>
            <td>{{ $maba->agama }}</td>
            <td>{{ $maba->nik }}</td>
            <td>{{ $maba->telp }}</td>
            <td>{{ $maba->alamat }}</td>
            <td>
                <form action="{{ route('mhsgege.destroy',$maba->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('mhsgege.show',$maba->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('mhsgege.edit',$maba->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection