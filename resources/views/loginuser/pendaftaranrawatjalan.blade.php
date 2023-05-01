@extends('layouts.main')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('container')     
    <div class="padding-top1 p-left border-bot border-top">Beranda {{$title}}</div> 
    <main class="container border shadow p-3 mb-5 bg-light rounded border-2">
        <div class="row justify-content-md-center">
            <div class="row"> 
                <p class="text-center">Jika Anda sudah mempunyai nomor rekam medis (RM) pilih Daftar Pasien Lama. Jika Anda belum mempunyai nomor rekam medis (RM) pilih Daftar Pasien Baru.</p>
            </div>
            <div class="col-md-3 mt-3 text-center" >
                <a href="#" class="text-decoration-none">
                    <div class=" shadow p-3 mb-5 bg-light rounded border border-1">
                        <img src="{{asset('img/patient kos.png')}}" alt="" height="75px" width="75px">
                        <h1>Pasien Lama</h1>
                    </div>
                </a>
               
            </div>
            <div class="col-md-3 mt-3 text-center">
                <a href="/pasien" class="text-decoration-none">
                    <div class=" shadow p-3 mb-5 bg-light rounded border border-1">
                        <img src="{{asset('img/patient sol.png')}}" alt="" height="75px" width="75px">
                        <h1>Pasien Baru <br> </h1>
                    </div>
                </a>
            </div>
        </div>
    </main>

   
@endsection