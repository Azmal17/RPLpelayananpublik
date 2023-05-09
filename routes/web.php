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
Route::get('/dashboarduser',[LoginUserController::class, 'dashboard']);
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
