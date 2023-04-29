<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengaduan;
use App\Models\Patient;

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
        $patients = Patient::latest()->paginate(5);
        return view('loginuser.prj',[
            "title" => "Pendaftaran"
        ], compact('patients'))
                ->with('i', (request()->input('page', 1) - 1) * 5);;
    }
    public function pengaduan()
    {
        $data = pengaduan::all();
        return view('loginuser.pengaduanuser',[
            "title" => "Pengaduan"
        ], compact('data'));
    }
    public function faq()
    {
        return view('loginuser.faq',[
            "title" => "FAQ"
        ], compact('data'));
    }

    // public function loginuserproses(Request $request){
    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('loginuser.dashboarduser');
    //     }
    //     return redirect('loginuser.loginpage');
        
    // }
}
