<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
use App\Models\Employee;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\InapController;
use App\Http\Controllers\PatientController;
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



Route::get('/dokter',[EmployeeController::class, 'index'])->name('dokter')->middleware('auth');

Route::get('/tambahdokter',[EmployeeController::class, 'tambahdokter'])->name('tambahdokter')->middleware('auth');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata')->middleware('auth');

Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata')->middleware('auth');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata')->middleware('auth');

Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete')->middleware('auth');

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