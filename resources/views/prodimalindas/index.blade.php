@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prodi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('prodimalindas.create') }}"> Create New Prodi</a>
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
            <th>Nama Prodi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($prodimalindas as $prodimalinda)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $prodimalinda->kode_prodi }}</td>
            <td>{{ $prodimalinda->nama_prodi }}</td>
            <td>
                <form action="{{ route('prodimalindas.destroy',$prodimalinda->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('prodimalindas.show',$prodimalinda->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('prodimalindas.edit',$prodimalinda->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $prodimalindas->links() !!} --}}
      
@endsection