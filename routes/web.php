<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\loginController;
use App\Models\Employee;
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
});



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
