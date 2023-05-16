@extends('patients.layout')
 
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<div class="content-wrapper">
    <div class="content-header"></div>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h1>Data Pasien</h1>
            </div>
            <div class="container-fluid">
                <div class="mt-3 mb-3">
                    <a class="btn btn-success" href="{{ route('patients.create') }}"> Create New Patient</a>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            <div class="card-body table-responsive p-0">
                <table class="table table-bordered">
                    <tr class="bg-primary">
                        <th class="text-center">No</th>
                        <th class="text-center">No RM </th>
                        <th class="text-center">Nomor Asuransi</th>
                        <th class="text-center">Nama Pasien</th>
                        <th class="text-center">Umur</th>
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Alamat Pasien</th>
                        <th class="text-center">Golongan Darah</th>
                        <th class="text-center">Nomor Telepon</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Status Kawin</th>
                        <th class="text-center" width="280px">Action</th>
                    </tr>
                    @foreach ($patients as $patient)
                    <tr>
                        <td class="text-center">{{  ++$i }}</td>
                        <td class="text-center">{{ $patient->no_rm }}</td>
                        <td class="text-center">{{ $patient->no_asuransi}}</td>
                        <td class="text-center">{{ $patient->nama_pasien}}</td>
                        <td class="text-center">{{ $patient->umur}}</td>
                        <td class="text-center">{{ $patient->tanggal_lahir}}</td>
                        <td class="text-center">{{ $patient->jenis_kelamin}}</td>
                        <td class="text-center">{{ $patient->alamat_pasien}}</td>
                        <td class="text-center">{{ $patient->gol_darah}}</td>
                        <td class="text-center">{{ $patient->no_telp}}</td>
                        <td class="text-center">{{ $patient->email}}</td>
                        <td class="text-center">{{ $patient->agama}}</td>
                        <td class="text-center">{{ $patient->status_kawin}}</td>
                        <td class="text-center">
                            <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
            
                
                                <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
            
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
    {!! $patients->links() !!}
</div>
@endsection