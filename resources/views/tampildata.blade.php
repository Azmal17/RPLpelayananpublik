@extends('layout.admin')

@section('content')

<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <h1 class='text-center'>Edit Data Dokter</h1>
  <div class="container">
    <div class="row justify-content-center">
     <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="/updatedata/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Dokter</label>
              <input type="text" name="kodedokter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="{{ $data->kodedokter }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Dokter</label>
              <input type="text" name="namadokter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="{{ $data->namadokter }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                <input type="file" name="foto" class="form-control"  value="{{ $data->foto }}>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Spesialis</label>
                <select class="form-select" name="jeniskelamin" aria-label=".form-select-sm example">
                  <option selected>{{ $data->jeniskelamin }}</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                  </select>
            
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Spesialis</label>
              <input type="text" name="spesialis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="{{ $data->spesialis }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="{{ $data->alamat }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Telepon</label>
              <input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="{{ $data->notelepon }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/dokter" class="btn btn-danger">Kembali</a>
          </form>
        </div>
      </div>
     </div>
    </div>
  </div>
  
</body>

@endsection