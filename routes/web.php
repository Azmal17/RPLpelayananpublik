<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
use App\Models\Employee;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\InapController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterController;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\ViewController;
use  App\Http\Controllers\PoliController;
use  App\Http\Controllers\PasienController;
use  App\Http\Controllers\AntrianController;
use  App\Http\Controllers\KunjunganController;
use  App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\MhsggsController;
use App\Http\Controllers\Dafa_MahasiswaController;
use App\Http\Controllers\NilaiMKHanaController;
use App\Http\Controllers\MahasiswaHanaController;

use  App\Http\Controllers\ProdimalindaController;
use  App\Http\Controllers\MatakuliahmalindaController;
use  App\Http\Controllers\MahasiswamalindaController;
use  App\Http\Controllers\NilaimalindaController;
use  App\Http\Controllers\Azmal_MahasiswaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $jumlahdokter = Employee::count();
    $jumlahdokterpria = Employee::where('jeniskelamin','Pria')->count();
    $jumlahdokterwanita = Employee::where('jeniskelamin','Wanita')->count();
    return view('welcome',compact('jumlahdokter','jumlahdokterpria','jumlahdokterwanita'));
})->middleware('auth');



Route::get('/dokter',[EmployeeController::class, 'index'])->name('dokter');

Route::get('/tambahdokter',[EmployeeController::class, 'tambahdokter'])->name('tambahdokter');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');

//export PDF
Route::get('/exportpdf',[EmployeeController::class, 'exportpdf'])->name('exportpdf');


Route::get('/login',[loginController::class, 'login'])->name('login');
Route::post('/loginproses',[loginController::class, 'loginproses'])->name('loginproses');

Route::get('/register',[loginController::class, 'register'])->name('register');
Route::post('/registeruser',[loginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[loginController::class, 'logout'])->name('logout');

//crud rawat jalan
Route::get('/rawatjalan', [AdminController::class, 'index'])->name('rawatjalan')->middleware('auth') ;
Route::get('/tambahdatarawatjalan', [AdminController::class, 'tambahdatarawatjalan'])->name('tambahdatarawatjalan')->middleware('auth') ;
Route::post('/tambahdatarawatjalan2', [AdminController::class, 'tambahdatarawatjalan2'])->name('tambahdatarawatjalan2')->middleware('auth') ;

Route::get('/tampilkandatarawatjalan/{id}', [AdminController::class, 'tampilkandatarawatjalan'])->name('tampilkandatarawatjalan')->middleware('auth') ;
Route::post('/updatedatarawatjalan/{id}', [AdminController::class, 'updatedatarawatjalan'])->name('updatedatarawatjalan')->middleware('auth') ;

Route::get('/deletedatarawatjalan/{id}', [AdminController::class, 'deletedatarawatjalan'])->name('deletedatarawatjalan')->middleware('auth') ;

//crud pengaduan
Route::get('/datapengaduan',[pengaduanController::class, 'index']) ->name('dataPengaduan');

Route::get('/tambahDataPengaduan',[pengaduanController::class, 'tambahDataPengaduan']) ->name('tambahDataPengaduan');
Route::post('/insertDataPengaduan',[pengaduanController::class, 'insertDataPengaduan']) ->name('insertDataPengaduan');

Route::get('/tampilDataPengaduan/{id}',[pengaduanController::class, 'tampilDataPengaduan']) ->name('tampilDataPengaduan');
Route::post('/updateDataPengaduan/{id}',[pengaduanController::class, 'updateDataPengaduan']) ->name('updateDataPengaduan');

Route::get('/deletePengaduan/{id}',[pengaduanController::class, 'deletePengaduan']) ->name('deletePengaduan');

// crud Rawat Inap
Route::resource('inaps', InapController::class)->middleware('auth');

// crud Pendaftaran
Route::resource('patients', PatientController::class);

// user route
Route::get('/loginuser',[LoginUserController::class, 'index']);
Route::post('/loginuserproses',[LoginUserController::class, 'loginuserproses']);
Route::get('/registerpasien',[RegisterController::class, 'index']);
Route::post('/registerpasienproses',[RegisterController::class, 'registerpasienproses']);
Route::get('/dashboarduser',[LoginUserController::class, 'dashboard'])->name('dashboarduser');
Route::get('/pengaduanuser',[LoginUserController::class, 'pengaduan']);
Route::get('/faq',[LoginUserController::class, 'faq']);
Route::get('/pri',[LoginUserController::class, 'pri']);
Route::get('/prj',[LoginUserController::class, 'prj']);
Route::get('/alur',[LoginUserController::class, 'alur']);
Route::get('/pendaftaranrawatjalan',[LoginUserController::class, 'pendaftaranrawatjalan'])->name ('pendaftaranrawatjalan');
Route::get('/pasien', [LoginUserController::class, 'create']);
Route::post('/pasienstore', [LoginUserController::class, 'pasienstore'])->name('pasienstore');
Route::get('/pilihklinik', [LoginUserController::class, 'pilihklinik'])->name('pilihklinik');
Route::post('/pilihklinikstore', [LoginUserController::class, 'pilihklinikstore'])->name('pilihklinikstore');
Route::get('/pendaftaran', [LoginUserController::class, 'daftarantri'])->name('daftarantri');
Route::get('/antrian', [LoginUserController::class, 'antrian'])->name('antrian');
Route::get('/index1', [LoginUserController::class, 'pendaftaranindex'])->name('dataantrian');
Route::get('/editantrian/{id}', [LoginUserController::class, 'editantrian'])->name('editantrian') ;
Route::post('/updateantrian/{id}', [LoginUserController::class, 'updateantrian'])->name('updateantrian') ;
Route::get('/destroyantrian/{id}', [LoginUserController::class, 'destroyantrian'])->name('destroyantrian') ;
Route::post('/daftarstore', [LoginUserController::class, 'daftarstore'])->name('daftarstore') ;


//Google Login
Route::get('/auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

//coba
Route::get('/profil', function () {
    return view('profil');
});
Route::get('dashboard', function () {
        return view('dashboard');
    });



Route::resource('pasien', PasienController::class);
Route::resource('kunjungan', KunjunganController::class);
Route::resource('poli', PoliController::class);
Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('antrian', AntrianController::class);
Route::get('cetak-antrian', [AntrianController::class, 'cetak'])->name('cetak_antrian');
Route::post('next-antrian', [AntrianController::class, 'next_antrian'])->name('next_antrian');
Route::post('reset-antrian', [AntrianController::class, 'reset_antrian'])->name('reset_antrian');


Route::get('/report-Pasien', [App\Http\Controllers\PasienController::class, 'report']);
Route::get('/report-Poli', [App\Http\Controllers\PoliController::class, 'report']);
Route::get('/report-Kunjungan', [App\Http\Controllers\KunjunganController::class, 'report']);
Route::get('/report-Laporan', [App\Http\Controllers\LaporanController::class, 'report']);

// Route::get('registrasi', [App\Http\Controllers\AuthController::class, 'daftar']);  //klo mau buka halaman registrasi
Route::post('login', [UserController::class, 'authenticate'])->name('auth');
Route::get('logout', [UserController::class, 'logout']);

Route::get('/welcome', [App\Http\Controllers\BerandaController::class, 'index']);

// Route::resource('v-pasien', ViewController::class);
Route::get('v-pasien/cetak/{id}', [ViewController::class, 'cetak_antrian'])->name('v_pasien_cetak');
Route::get('v-pasien/{id}', [ViewController::class, 'show'])->name('v_pasien.show');
Route::get('laporan', [ViewController::class, 'index']);

//UAS GEGE
Route::get('/mhsgege', [MhsggsController::class, 'index'])->name('mhsgege.index');
Route::post('/mhsgege', [MhsggsController::class, 'store'])->name('mhsgege.store');
Route::get('/mhsgege/create', [MhsggsController::class, 'create'])->name('mhsgege.create');
Route::put('/mhsgege/update', [MhsggsController::class, 'update'])->name('mhsgege.update');
Route::get('/mhsgege/edit', [MhsggsController::class, 'edit'])->name('mhsgege.edit');
Route::delete('/mhsgege/destroy', [MhsggsController::class, 'destroy'])->name('mhsgege.destroy');
Route::get('/mhsgege/show', [MhsggsController::class, 'show'])->name('mhsgege.show');

//UAS HANA
Route::resource('/mahasiswas', MahasiswaHanaController::class);
Route::resource('/nilaimk', NilaiMKHanaController::class);

//Route::resource('/mhsgege', MhsggsController::class);

// Route Malinda
Route::resource('/prodimalindas', ProdimalindaController::class);
Route::resource('/matakuliahmalindas', MatakuliahmalindaController::class);
Route::resource('/mahasiswamalindas', MahasiswamalindaController::class);
Route::resource('/nilaimalindas', NilaimalindaController::class);

//Route UAS Dafa
Route::resource('dafa_mahasiswa', Dafa_MahasiswaController::class);

//Route UAS Azmal
Route::get('/mahasiswa',[Azmal_MahasiswaController::class,'index']);
Route::get('/mahasiswa/create',[Azmal_MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[Azmal_MahasiswaController::class,'store']);
Route::get('/mahasiswa/{IDMahasiswa}/edit',[Azmal_MahasiswaController::class,'edit']);
Route::put('/mahasiswa/{IDMahasiswa}',[Azmal_MahasiswaController::class,'update']);
Route::delete('/mahasiswa/{IDMahasiswa}',[Azmal_MahasiswaController::class,'destroy']);