@extends('mahasiswamalindas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mahasiswamalindas.create') }}"> Create New mahasiswamalinda</a>
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
            <th>Nama</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>NIK</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Nama Prodi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswamalindas as $mahasiswamalinda)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mahasiswamalinda->nama }}</td>
            <td>{{ $mahasiswamalinda->nim }}</td>
            <td>{{ $mahasiswamalinda->jenis_kelamin }}</td>
            <td>{{ $mahasiswamalinda->agama }}</td>
            <td>{{ $mahasiswamalinda->nik }}</td>
            <td>{{ $mahasiswamalinda->telepon }}</td>
            <td>{{ $mahasiswamalinda->alamat }}</td>
            <td>
                @foreach ($prodi as $item)
                    @if ($item->id === $mahasiswamalinda->namaprodi)
                        {{ $item->nama_prodi }}
                    @endif
                @endforeach
            </td>
            <td>
                <form action="{{ route('mahasiswamalindas.destroy',$mahasiswamalinda->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('mahasiswamalindas.show',$mahasiswamalinda->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('mahasiswamalindas.edit',$mahasiswamalinda->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $products->links() !!} --}}
      
@endsection