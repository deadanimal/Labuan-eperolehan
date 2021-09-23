<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerancanganController;
use App\Http\Controllers\PembekalController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\CidbController;
use App\Http\Controllers\KodController;

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

Route::resource('/perancangan',PerancanganController::class);
Route::resource('/pembekal', PembekalController::class);
Route::resource('/dokumen', DokumenController::class);
Route::resource('/cidb', CidbController::class);
Route::resource('/kod',kodController::class);



Route::get('/pelan-pengesah/{id}', [PerancanganController::class,'updatePengesah']);
Route::get('/pelan-pelulus/{id}',[PerancanganController::class,'updatePelulus']);

// Route::get('/jadual-minggu', [NotisController::class,'jadual_minggu']);


Route::get('/', function () {
    return view('logmasuk');
});

Route::get('/2', function () {
    return view('base');
});

Route::get('/3', function () {
    return view('pembekal.index');
});


