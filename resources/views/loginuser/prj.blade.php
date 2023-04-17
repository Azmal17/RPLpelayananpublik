@extends('layouts.main')

@section('container')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pendaftaran Pasien</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('patients.create') }}"> Create New Patient</a>
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
            <th>No RM </th>
            <th>Nomor Asuransi</th>
            <th>Nama Pasien</th>
            <th>Umur</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Pasien</th>
            <th>Golongan Darah</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Agama</th>
            <th>Status Kawin</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <td>{{  ++$i }}</td>
            <td>{{ $patient->no_rm }}</td>
            <td>{{ $patient->no_asuransi}}</td>
            <td>{{ $patient->nama_pasien}}</td>
            <td>{{ $patient->umur}}</td>
            <td>{{ $patient->tanggal_lahir}}</td>
            <td>{{ $patient->jenis_kelamin}}</td>
            <td>{{ $patient->alamat_pasien}}</td>
            <td>{{ $patient->gol_darah}}</td>
            <td>{{ $patient->no_telp}}</td>
            <td>{{ $patient->email}}</td>
            <td>{{ $patient->agama}}</td>
            <td>{{ $patient->status_kawin}}</td>
            <td>
                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $patients->links() !!}
</div>
    
@endsection