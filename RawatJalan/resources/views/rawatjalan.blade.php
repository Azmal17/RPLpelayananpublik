<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pelayanan Publik</title>
  </head>
  <body>
    <h1 class="text-center">Data Rawat Jalan</h1>
        <div class="container">
            <div class="row">
                <a href="/tambahdatarawatjalan" class="btn btn-primary" >Tambah</a>
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
                    @foreach ($data as $row)
                      <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->norm}}</td>
                        <td>{{$row->noregistrasi}}</td>
                        <td>{{$row->norujukan}}</td>
                        <td>{{$row->namapasien}}</td>
                        <td>
                            <a href="/tampilkandata/{{$row->id}}" class="btn btn-secondary">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-norm="{{$row->norm}}">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
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
            window.location ="/deletedata/"+rawatjalanid+""    
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