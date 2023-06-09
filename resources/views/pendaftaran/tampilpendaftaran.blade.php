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
    <h1 class="text-center">Edit Data Rawat Jalan</h1>
        <div class="container">
            <button type="button" class="btn btn-primary"></button>
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="">No RM</label>
                        <input type="number" name ="norm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->norm}}"> 
                      </div>
                      <div class="form-group">
                        <label for="">No Registrasi</label>
                        <input type="number" name ="noregistrasi" class="form-control" id="exampleInputPassword1" value="{{$data->noregistrasi}}">
                      </div>
                      <div class="form-group">
                        <label for="">No Rujukan</label>
                        <input type="number" name ="norujukan" class="form-control" id="exampleInputPassword1" value="{{$data->norujukan}}">
                      </div>
                      <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="string" name ="namapasien" class="form-control" id="exampleInputPassword1" value="{{$data->namapasien}}">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>     
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>