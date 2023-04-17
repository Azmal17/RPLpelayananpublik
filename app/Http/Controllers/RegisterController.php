<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.daftar',[
            "title" => 'Register'
        ]);
    }

    // public function registerpasienproses(Request $request)
    // {
    //     pasien::create([
    //         'name' => $request->name,
    //         'email' => $request->name,
    //         'password' => bcrypt($request->password),
    //         'name' => $request->name,
    //         'remember_token' => Str::random(60),
    //     ]);
        
    //     return redirect('/loginuser');
    // }
}

