@extends('layouts.main')

@section('flex')
    <div class="padding-top p-left border-bot border-top"></div>
    <div class="row mt-1">
        <img src="{{asset('img/rawat jalan.webp')}}" alt="rawat jalan" height="500px" >
    </div>
    <div class="row">
        <img src="{{asset('img/rawat inap.jpg')}}" alt="rawat inap" height="500px">
    </div>
    <div class="row justify-content-md-center">
        <img class="col-4" src="{{asset('img/pengaduan.png')}}" alt="pengaduan"  >
        <div class="col-3 text-center bg-info p-5">
            <h3>Kontak kami</h3>
            <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum inventore corporis iusto odio, eos doloremque nesciunt, dignissimos amet laudantium assumenda quasi delectus provident, nam magnam nobis fugiat dolore esse ipsam.</p>
        </div>
        <div class="col-3 bg-success p-5">
            <h3 class="text-center">FAQ</h3>
            <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit molestias, dolorem doloremque quam aperiam assumenda eum? Similique, maiores rerum assumenda, illum aspernatur tempora autem dolore, eum eaque dolorem nemo?</p>
        </div>
      div>  
    
@endsection