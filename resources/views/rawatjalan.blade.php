
@extends('layout.admin')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
@endpush


@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Rawat Jalan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol> --}}
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="container">
    <a href="/tambahdatarawatjalan" class="btn btn-primary" >Tambah</a>
    <div class="row">
      @if ($message = Session::get('success'))
          <div class="alert alert-danger" role="alert">
              {{$message}}
          </div> 
      @endif
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">No RM</th>
            <th scope="col">No Registrasi</th>
            <th scope="col">No Rujukan</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp 
          @foreach ($data as $index => $row)
            <tr>
              <th scope="row">{{ $no++ }}</th>
              <td>{{$row->norm}}</td>
              <td>{{$row->noregistrasi}}</td>
              <td>{{$row->norujukan}}</td>
              <td>{{$row->namapasien}}</td>
              <td>
                  <a href="/tampilkandatarawatjalan/{{$row->id}}" class="btn btn-secondary">Edit</a>
                  <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-norm="{{$row->norm}}">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $('.delete').click(function(){
        var rawatjalanid = $(this).attr('data-id');
        var rawatjalannorm = $(this).attr('data-norm');
        
        Swal.fire({
            title: 'Yakin?',
            text: "Anda akan menghapus data dengan No RM "+rawatjalannorm+"",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Konfirmasi!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location ="/deletedatarawatjalan/"+rawatjalanid+""    
            Swal.fire(
                'Data berhasil dihapus.'
            )
        }
        else {
            Swal.fire(
            'Data tidak dihapus'
            )
        }
        });
    });
  </script>
</html>