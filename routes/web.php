<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\buktiPemesananController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\fasilitasController;
use App\Http\Controllers\dashboard\pemesananController;
use App\Http\Controllers\dashboard\reservasiController;
use App\Http\Controllers\dashboard\tipe_kamarController;
use App\Http\Controllers\dashboard\user_role_accessController;
use App\Http\Controllers\dashboardReseptionis\dashboardReservasiController;
use App\Http\Controllers\facilityController;
use App\Http\Controllers\homeUserController;
use App\Http\Controllers\roomController;
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

//Route Home hotel 
Route::get('/', function () {
    return view('home.index');
});


Route::resource('home', homeUserController::class);
Route::resource('room', roomController::class);
Route::resource('facility', facilityController::class);
Route::resource('booking', bookingController::class);



//ROUTE role Admin
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/dashboard-table', function () {
    return view('dashboard.dashboard-table.dashboard-table');
})->name('dashboard/dashboard-table');

//Route role reseptionis
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard-reseptionis/reservasi', function () {
    return view('dashboard-reseptionis.reservasi.index') ;
})->name('dashboard-reseptionis.reservasi');

Route::resource('dashboard-reseptionis', dashboardReservasiController::class);
Route::resource('bookingPemesanan',buktiPemesananController::class);

//Route Dashboard 
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('dashboard/dashboard-table', dashboardController::class);
    Route::resource('dashboard/fasilitas', fasilitasController::class);
    Route::resource('dashboard/pemesanan', pemesananController::class);
    Route::resource('dashboard/reservasi', reservasiController::class);
    Route::resource('dashboard/tipe_kamar', tipe_kamarController::class);
    Route::resource('dashboard/user_role_access', user_role_accessController::class);
});



require __DIR__.'/auth.php';


