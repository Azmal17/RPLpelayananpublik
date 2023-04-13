@extends('inaps.layout')
 
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Pendaftaran Rawat Inap</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('inaps.create') }}"> Create New Data</a>
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
                <th>No. Registrasi</th>
                <th>No. Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>Kode Dokter</th>
                <th>Nama Dokter</th>
                <th>No. Kamar</th>
                <th>No. Rujukan</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($inaps as $inap)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $inap->no_registrasi }}</td>
                <td>{{ $inap->no_rm }}</td>
                <td>{{ $inap->nama_pasien }}</td>
                <td>{{ $inap->kode_dokter }}</td>
                <td>{{ $inap->nama_dokter }}</td>
                <td>{{ $inap->no_kamar }}</td>
                <td>{{ $inap->no_rujukan }}</td>
                <td>{{ $inap->tgl_masuk }}</td>
                <td>{{ $inap->tgl_keluar }}</td>
                <td>
                    <form action="{{ route('inaps.destroy',$inap->id) }}" method="POST">
    
                        <a class="btn btn-info" href="{{ route('inaps.show',$inap->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('inaps.edit',$inap->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    
        {!! $inaps->links() !!}
    </div>
@endsection
