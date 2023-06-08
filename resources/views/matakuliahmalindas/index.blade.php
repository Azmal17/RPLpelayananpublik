@extends('mahasiswamalindas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MK</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('matakuliahmalindas.create') }}"> Create New MK</a>
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
            <th>Kode</th>
            <th>Nama MK</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($matakuliahmalindas as $matakuliahmalinda)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $matakuliahmalinda->kode_mk }}</td>
            <td>{{ $matakuliahmalinda->nama_mk }}</td>
            <td>
                <form action="{{ route('matakuliahmalindas.destroy',$matakuliahmalinda->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('matakuliahmalindas.show',$matakuliahmalinda->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('matakuliahmalindas.edit',$matakuliahmalinda->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $matakuliahmalindas->links() !!} --}}
      
@endsection