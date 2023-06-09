@extends('pengaduanusers.layout')
 
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="content-wrapper">
        <div class="content-header"></div>
            <div class="container">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Data Pengaduan Rumah Sakit ROSATI</h1>
                    </div>
                    <div class="container-fluid">
                        {{-- <div class="pull-right">
                            <a class="btn btn-success ml-2 mt-2" href="{{ route('pengaduanusers.create') }}"> Buat Pengaduan</a>
                        </div>     --}}
                        <div class="row m-2">
  
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered">
                                <tr class="bg-primary">
                                    <th>No</th>
                                    <th>Nama Pengadu</th>
                                    <th>Email</th>
                                    <th>No. HP</th>
                                    <th>Tanggal Berkunjung</th>
                                    <th>Isi</th>
                                    <th>Bagian Layanan</th>
                                    <th>Status</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($pengaduanusers as $pengaduanuser)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $pengaduanuser->nama_pengadu }}</td>
                                    <td>{{ $pengaduanuser->email }}</td>
                                    <td>{{ $pengaduanuser->no_hp }}</td>
                                    <td>{{ $pengaduanuser->tgl_kunjungan }}</td>
                                    <td>{{ $pengaduanuser->isi }}</td>
                                    <td>{{ $pengaduanuser->bagian }}</td>
                                    <td>{{ $pengaduanuser->status }}</td>
                                    <td>
                                        <form action="{{ route('pengaduanusers.destroy',$pengaduanuser->id) }}" method="POST">
                           
                                            {{-- <a class="btn btn-info" href="{{ route('pengaduanusers.show',$pengaduanuser->id) }}">Show</a> --}}
                            
                                            <a class="btn btn-primary" href="{{ route('pengaduanusers.edit',$pengaduanuser->id) }}">Edit</a>
                           
                                            @csrf
                                            @method('DELETE')
                              
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                </div>
    <
                </div>
            </div>
        </div>
    </div>
        {!! $pengaduanusers->links() !!}
    </div>
@endsection
