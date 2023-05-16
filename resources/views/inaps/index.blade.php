@extends('inaps.layout')
 
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="content-wrapper">
        <div class="content-header"></div>
            <div class="container">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Data Rawat Inap</h1>
                    </div>
                    <div class="container-fluid">
                        <div class="pull-right">
                            <a class="btn btn-success ml-2 mt-2" href="{{ route('inaps.create') }}"> Create New Data</a>
                        </div>    
                        <div class="row m-2">
  
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered">
                                <tr class="bg-primary">
                                    <th class="text-center">No</th>
                                    <th class="text-center">No. Registrasi</th>
                                    <th class="text-center">No. Rekam Medis</th>
                                    <th class="text-center">Nama Pasien</th>
                                    <th class="text-center">Kode Dokter</th>
                                    <th class="text-center">Nama Dokter</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">No. Rujukan</th>
                                    <th class="text-center">Tanggal Masuk</th>
                                    <th class="text-center">Tanggal Keluar</th>
                                    <th class="text-center" width="280px">Action</th>
                                </tr>
                                @foreach ($inaps as $inap)
                                <tr>
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td class="text-center">{{ $inap->no_registrasi }}</td>
                                    <td class="text-center">{{ $inap->no_rm }}</td>
                                    <td class="text-center">{{ $inap->nama_pasien }}</td>
                                    <td class="text-center">{{ $inap->kode_dokter }}</td>
                                    <td class="text-center">{{ $inap->nama_dokter }}</td>
                                    <td class="text-center">{{ $inap->no_kamar }}</td>
                                    <td class="text-center">{{ $inap->no_rujukan }}</td>
                                    <td class="text-center">{{ $inap->tgl_masuk }}</td>
                                    <td class="text-center">{{ $inap->tgl_keluar }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('inaps.destroy',$inap->id) }}" method="POST">
                        
                            
                                            <a class="btn btn-primary" href="{{ route('inaps.edit',$inap->id) }}">Edit</a>
                        
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
        {!! $inaps->links() !!}
    </div>
@endsection
