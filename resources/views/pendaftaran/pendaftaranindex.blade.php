@extends('layouts.main')
  
@section('container')
<div class="padding-top1"> </div>
    <title>Rosati | {{$title}}</title>
  </head>
  <body>
    <h1 class="text-center">Data antrian</h1>
        <div class="container">
          <div class="row"></div>
            <div class="row">
                <table class="table">
                  @csrf
                    <thead>
                      <tr>
                        <th class="text-center" scope="col">Antrian</th>
                        <th class="text-center" scope="col">No RM</th>
                        <th class="text-center" scope="col">Tanggal Berkunjung</th>
                        <th class="text-center" scope="col">Klinik</th>
                        {{-- <th class="text-center"     scope="col">Aksi</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($daftar as $row)
                      <tr>
                        <th class="text-center" scope="row">{{$row->id}}</th>
                        <td class="text-center">{{$row->norm}}</td>
                        <td class="text-center">{{$row->tgl_berkunjung}}</td>
                        <td class="text-center">{{$row->klinik}}</td>
                        <td class="text-center">
                            {{-- <a href="/editantrian/{{$row->id}}" class="btn btn-secondary">Edit</a>
                            <a href="/destroyantrian/{{$row->id}}" class="btn btn-danger">Delete</a> --}}

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
@endsection