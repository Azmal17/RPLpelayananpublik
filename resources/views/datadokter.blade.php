@extends('layout.admin')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
@endpush


@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header"></div>
    <div class="container">
      <div class="card">
        <div class="card-header text-center">
          <h1 >Data Dokter</h1>
        </div>
        <div class="container-fluid">
          <a  href="/tambahdokter" class="btn btn-success mt-2">+ Tambah</a>
            <div class="row g-3 align-items-center mt-2" >
              <div class="col-auto">
                <form action="/dokter" method="GET">
                <input type="search" id="inputPassword6" name="search" class="form-control mb-3" aria-describedby="passwordHelpInline">
                </form>
              </div>
        
              <div class="col-auto">
              <a  href="/exportpdf" class="btn btn-info mb-3">Export PDF</a>
              </div>
        
              
        
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-bordered">
              <thead>
              <tr class="bg-primary">
                <th class="text-center">No</th>
                <th class="text-center">Kode Dokter</th>
                <th class="text-center">Nama Dokter</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Spesialis</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">No Telepon</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp             
              @foreach($data as $index => $row)
              <tr>
                <th class="text-center" scope="row">{{ $index + $data->firstItem() }} </th>
                <td class="text-center">{{ $row->kodedokter }}</td>
                <td class="text-center">{{ $row->namadokter }}</td>
                <td class="text-center">
                  <img src="{{ asset('fotodokter/'.$row->foto) }}" style="width: 50px;">
                </td>
                <td class="text-center">{{ $row->jeniskelamin }}</td>
                <td class="text-center">{{ $row->alamat }}</td>
                <td class="text-center">{{ $row->spesialis }}</td>
                <td class="text-center">0{{ $row->notelepon }}</td>
                <td class="text-center">              
                  <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                  <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->namadokter }}">Delete</a>
                </td>
              </tr>
              @endforeach
        
            </tbody>
            </table>
            {{ $data->links() }}
          </div>
        </div>
      </div>
    </div>
</div>   
</div>



@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script>
  $('.delete').click( function(){
    var dokterid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({ 
    title: "Yakin ?",
    text: "Kamu akan menghapus data dokter "+nama+" ",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
  . then((willDelete) => {
    if (willDelete) {
      window.location = "/delete/"+dokterid+""
      swal("Data Berhasil DiHapus", {
        icon: "success",
       });
      } else {
      swal("Data tidak jadi dihapus");
      }
      });
  });
  
</script>
<script>
@if (Session::has('success'))
toastr.success("{{ Session::get('success') }}")
@endif
</script>
  
@endpush