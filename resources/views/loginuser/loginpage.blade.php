<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/sign-in.css')}}">
    @stack('css')
    <title>Rosati | {{$title}}</title>
  </head>
  <body>
        <div class="form-signin w-100 m-auto">
            <form action="/loginuserproses" method="POST">
            @csrf
            <img src="{{asset('img/logo1.png')}}" class="mx-auto d-block" alt="logo_rosati" width="100px" height="100px">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3">Belom memiliki akun?<a href="/registerpasien">Daftar</a> 
                
            </small>
        </div> 
  </body>


