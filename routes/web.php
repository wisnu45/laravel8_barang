<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use RealRashid\SweetAlert\Facades\Alert;


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

route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('/admin', [adminController::class, 'admin']);
    Route::get('/form', [adminController::class, 'form']);
    Route::post('/form', [adminController::class, 'store']);
    Route::post('/hapus/data/{id}', [adminController::class, 'delete']);
});
route::group(['middleware' => ['auth']], function () {
    Route::get('/detail/{barang:slug}', [barangController::class, 'detail']);
    Route::delete('/hapus/{id}', [barangController::class, 'hapus']);
    Route::get('/hasil', [barangController::class, 'hasil']);
    Route::get('/history', [barangController::class, 'history']);
    route::post('/checkout/{id}', [barangController::class, 'checkout']);
});
route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [loginController::class, 'login'])->name('login');
    Route::post('/login', [loginController::class, 'auth']);
    Route::get('/register', [registerController::class, 'register']);
    Route::post('/register', [registerController::class, 'regis']);
});
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/', [barangController::class, 'index']);



route::post('/beli/{id}', [barangController::class, 'beli']);

route::post('/cari', [barangController::class, 'index']);
