<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
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
        ]);
    }
    public function alur()
    {
        return view('loginuser.alur',[
            "title" => "Alur Pelayanan"
        ]);
    }
    public function pendaftaranrawatjalan()
    {
        return view('loginuser.pendaftaranrawatjalan',[
            "title" => "Pendaftaran"
        ]);
    }
    public function pilihklinik()
    {
        return view('loginuser.pilihklinik',[
            "title" => "Pilih Klinik"
        ]);
    }

    // public function loginuserproses(Request $request){
    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('loginuser.dashboarduser');
    //     }
    //     return redirect('loginuser.loginpage');
        
    // }
    public function create(): View
    {
        return view('pendaftaranuser.create', ["title" => "> Pendaftaran"]);
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function pasienstore(Request $request): RedirectResponse
    {
        $request->validate([
            'no_rm' => 'required',
            'no_asuransi' => 'required',
            'nama_pasien' => 'required',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pasien' => 'required',
            'gol_darah' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'agama' => 'required',
            'status_kawin' => 'required',
        ]);
        
        Patient::create($request->all());
         
        return redirect()->route('pilihklinik');
    }
  
    /**
     * Display the specified resource.
     */
  
    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Update the specified resource in storage.
     */
  
    /**
     * Remove the specified resource from storage.
     */

}
