<?php
  
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\pengaduanController;
  



Route::get('/',[pengaduanController::class, 'index']) ->name('dataPengaduan');

Route::get('/tambahData',[pengaduanController::class, 'tambahData']) ->name('tambahData');
Route::post('/insertData',[pengaduanController::class, 'insertData']) ->name('insertData');

Route::get('/tampilData/{id}',[pengaduanController::class, 'tampilData']) ->name('tampilData');
Route::post('/updateData/{id}',[pengaduanController::class, 'updateData']) ->name('updateData');

Route::get('/delete/{id}',[pengaduanController::class, 'delete']) ->name('delete');

