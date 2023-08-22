<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('welcome');
});
Route::get('/catalog', function () {
    return view('catalog');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
// Route::resource('reservasi', ReservasiController::class);
Route::get('/reservasi', [ReservasiController::class, 'reservasi1'])->name('reservasi1');
Route::get('/reservasi/{nama}', [ReservasiController::class, 'reservasi2'])->name('reservasi2');
Route::get('/reservasi/{nama}/{nomorplat}', [ReservasiController::class, 'reservasi3'])->name('reservasi3');
Route::get('/reservasifindcar/{nama}/{nomorplat}', [ReservasiController::class, 'reservasi3'])->name('reservasi3');
Route::get('/reservasifindcar/{nama}/{nomorplat}/{kendaraancari}', [ReservasiController::class, 'reservasi3ext'])->name('reservasi3ext');
Route::get('/reservasi/{nama}/{nomorplat}/{kendaraan}', [ReservasiController::class, 'reservasi4'])->name('reservasi4');
Route::get('/reservasi/{nama}/{nomorplat}/{kendaraan}/{kilometer}/{transmisi}/{kat}', [ReservasiController::class, 'reservasi5'])->name('reservasi5');
// Route::get('/reservasi/{nama}/{nomorplat}/{kendaraan}/{kilometer}/{transmisi}', [ReservasiController::class, 'reservasi5'])->name('reservasi5');
Route::get('/reservasi/{nama}/{nomorplat}/{kendaraan}/{kilometer}/{transmisi}/{kat}/{paket}', [ReservasiController::class, 'reservasi6'])->name('reservasi6');
Route::get('/showpaket/{kendaraan}/{paket}', [ReservasiController::class, 'showpaket'])->name('showpaket');
Route::get('/sumpaket/{kendaraan}/{paket}/{jasa}', [ReservasiController::class, 'sumpaket'])->name('sumpaket');
Route::get('/showmaterial/{kendaraan}/{paket}', [ReservasiController::class, 'showmaterial'])->name('showmaterial');
Route::get('/summaterial/{kendaraan}/{paket}', [ReservasiController::class, 'summaterial'])->name('summaterial');
Route::get('/showpart/{kendaraan}/{paket}/{km}/{transmisi}', [ReservasiController::class, 'showpart'])->name('showpart');
Route::get('/sumpart/{kendaraan}/{paket}/{km}/{transmisi}', [ReservasiController::class, 'sumpart'])->name('sumpart');
Route::get('/sumparmat/{kendaraan}/{paket}/{km}/{transmisi}', [ReservasiController::class, 'sumparmat'])->name('sumparmat');
Route::get('/showcatalog/{segmen}/{iddata}', [HomeController::class, 'showcatalog'])->name('showcatalog');
Route::get('/showkendaraan', [ReservasiController::class, 'showkendaraan'])->name('showkendaraan');
Route::get('/showkendaraan/{ketik}', [ReservasiController::class, 'showkendaraanfilter'])->name('showkendaraanfilter');
