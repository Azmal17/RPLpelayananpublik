<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Route::get('/rawatjalan', [AdminController::class, 'index'])->name('rawatjalan') ;
Route::get('/tambahdatarawatjalan', [AdminController::class, 'tambahdatarawatjalan'])->name('tambahdatarawatjalan') ;
Route::post('/tambahdatarawatjalan2', [AdminController::class, 'tambahdatarawatjalan2'])->name('tambahdatarawatjalan2') ;

Route::get('/tampilkandata/{id}', [AdminController::class, 'tampilkandata'])->name('tampilkandata') ;
Route::post('/updatedata/{id}', [AdminController::class, 'updatedata'])->name('updatedata') ;

Route::get('/deletedata/{id}', [AdminController::class, 'deletedata'])->name('deletedata') ;