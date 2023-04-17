@extends('layouts.main')

@section('container')
    
        <div class="form-registration w-100 m-auto">
            <form action="/registerpasienproses" method="POST">
            @csrf
            <img src="{{asset('img/logo1.png')}}" class="mx-auto d-block" alt="logo_rosati" width="100px" height="100px">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

            <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="email" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Sudah Mendaftar?<a href="/loginuser"> Masuk</a> 
                
            </small>
        </div> 

@endsection

