@extends('layout.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header"></div>
        <div class="container">
            <div class="card">
                <div class="card-header text-center ">
                        <h1 class="font-weight-bold">Data Poliklinik</h1>
                </div><!-- End Page Title -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
            
                                <a href="{{ route('poli.create') }}" class="btn btn-success">Tambah Poliklinik</a>
                                <a class="btn btn-primary" href="/report-Poli" target="_blank""><i class="fas fa-print"></i>
                                    Cetak Data</a>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover mt-3">
                                        <thead class="thead-light text-center bg-primary">
                                            <tr>
                                                <td>No</td>
                                                <td>Kode</td>
                                                <td>Nama Poliklinik</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($polis as $i => $poli)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $poli->kode }}</td>
                                                    <td>{{ $poli->nama_poli }}</td>
                                                    <td>
                                                        <form action="{{ route('poli.destroy', $poli->id_poli) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a class="btn btn-warning"
                                                                href="{{ route('poli.edit', $poli->id_poli) }}">Ubah</a>
                                                            <button type="submit" class="btn btn-danger" on
                                                                click="javascript: return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection
