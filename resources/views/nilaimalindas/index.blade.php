@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nilai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('nilaimalindas.create') }}"> Create New nilaimalinda</a>
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
            <th>Nama Matakuliah</th>
            <th>Skor</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($nilaimalindas as $nilaimalinda)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
                @foreach ($kategori as $item)
                    @if ($item->id === $nilaimalinda->kategori)
                        {{ $item->nama_mk }}
                    @endif
                @endforeach
            </td>
            
            <td>{{ $nilaimalinda->skor }}</td>
            <td>
                <form action="{{ route('nilaimalindas.destroy',$nilaimalinda->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('nilaimalindas.show',$nilaimalinda->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('nilaimalindas.edit',$nilaimalinda->id) }}">Edit</a>
   
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