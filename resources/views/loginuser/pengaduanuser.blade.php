@extends('layouts.main')

@section('container')

@endsection




public function pengaduan()
    {
        $data = pengaduan::all();
        return view('loginuser.pengaduanuser',[
            "title" => "Pengaduan"
        ], compact('data'));
    }