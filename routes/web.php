<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoguserController;
use App\Http\Controllers\PetugasController;

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
Route::group(['middleware' => 'backhistory'], function()
{
 Route::get('/loginadm', [LoginController::class, 'login'])->name('login')->middleware('guest');
 Route::post('/actionlogin', [LoginController::class, 'actionlogin']);
 
 Route::get('/', [LoguserController::class, 'loguser'])->name('loguser')->middleware('guest');
 Route::post('/actionloguser', [LoguserController::class, 'actionloguser']);
 Route::get('logout', [LoginController::class,'logout'])->name('logout')->middleware('auth');
 Route::get('dashboard', [HomeController::class, 'dashboard'])->middleware('auth');
});

Route::resource('siswa', SiswaController::class);

Route::resource('petugas', PetugasController::class);
