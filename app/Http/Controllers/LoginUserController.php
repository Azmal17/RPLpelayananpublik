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

    public function antrian()
    {
        return view('loginuser.antrian',[
            "title" => "Antrian"
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

    public function pilihklinikstore(Request $request): RedirectResponse
    {
        $request->validate([
            'tanggal_kunjungan' => 'required',
            'klinik' => 'required',
        ]);
        
        Patient::create($request->all());
         
        return redirect()->route('daftarantri');
    }
  
    public function tampilkanNomorAntrian()
    {
        // inisialisasi variabel nomor antrian
        $nomor_antrian = 101;
        
        // mempassing variabel nomor antrian ke dalam blade
        return view('tampil_nomor_antrian', ['nomor_antrian' => $nomor_antrian]);

        
    } 
    
    public function index1 (){
        return view ('pendaftaranuser.index', ["title" => "> pendaftaran"]);
    }

    public function daftarantri(): View
    {
        return view('Pendaftaran.addpendaftaran', ["title" => "> Pendaftaran"]);
    }
    public function pendaftaranindex (){
        $daftar = Pendaftaran::all();
        return view ('pendaftaran.pendaftaranindex', compact('daftar'), ["title" => "> dashboard"]);
    }

    public function daftarstore(Request $request){
        $daftar = Pendaftaran::all();
        Pendaftaran::create($request->all());
        return redirect()->route('antrian');
    } 
    public function antrian1 (){
        return view ('pendaftaran.antrian', ["title" => "> antrian"]);
    }
    public function editantrian($id)
    {
        $daftar = Pendaftaran::find($id);
        return view('pendaftaran.editantrian', compact('daftar') , ["title" => "> antrian"]);
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function updateantrian(Request $request, $id): RedirectResponse
    {   $daftar = Pendaftaran::find($id);
        $daftar->update($request-> all());
        
        return redirect()->route('dataantrian');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroyantrian($id): RedirectResponse
    {
        $daftar = Pendaftaran::find($id);
        $daftar->delete();
         
        return redirect()->route('dataantrian');
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
