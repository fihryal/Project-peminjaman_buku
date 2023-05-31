<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/perpus');
});


Route::get('/perpus',[BukuController::class, 'index']);
Route::get('/tambahbuku',[BukuController::class, 'create']);
Route::post('/insertdata',[BukuController::class, 'insertdata']);

Route::get('/tampilkandata/{id}',[BukuController::class, 'edit']);
Route::post('/updatedata/{id}',[BukuController::class, 'updatedata']);

Route::get('/delete/{id}',[BukuController::class, 'delete']);