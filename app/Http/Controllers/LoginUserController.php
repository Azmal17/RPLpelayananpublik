<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\pengaduan;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('loginuser.loginpage',[
            "title" => "Login"
        ]);
    }

    public function dashboard()
    {
        return view('loginuser.dashboarduser',[
            "title" => "Home"
        ]);
    }
    public function pri()
    {
        return view('loginuser.pri',[
            "title" => "Pendaftaran"
        ]);
    }

    public function prj()
    {
        return view('loginuser.prj',[
            "title" => "Pendaftaran"
        ]);
    }
    public function pengaduan()
    {
        return view('loginuser.pengaduan',[
            "title" => "Pengaduan"
        ]);
    }

    // public function loginuserproses(Request $request){
    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('loginuser.dashboarduser');
    //     }
    //     return redirect('loginuser.loginpage');
        
    // }
}
