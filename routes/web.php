<?php

use Illuminate\Support\Facades\Route;
// Using PHP callable syntax...
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\admin\HomeController;


use App\Http\Controllers\admin\AuthController;

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

// Route::get('/', function () {
//     return view('user.home');
// });


Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/about', [DashboardController::class, 'about']);
Route::get('/login','admin\AuthController@loginpage')->name('user-login');
Route::post('/login/submit','admin\AuthController@login')->name('user-login-submit');
Route::get('/loadDataDesa/{id}', [DashboardController::class, 'loadDataDesa']);
Route::get('/loadDataSekolah/{id}', [DashboardController::class, 'loadDataSekolah']);
Route::get('/loadDataPasar/{id}', [DashboardController::class, 'loadDataPasar']);
Route::get('/loadDataTempatIbadah/{id}',[DashboardController::class, 'loadDataTempatIbadah']);
Route::get('/loadDataTempatWisata/{id}', [DashboardController::class, 'loadDataTempatWisata']);
Route::prefix('admin')->group(function () {
    Route::get('/loadDataDesa/{id}', 'admin\HomeController@loadDataDesa');
    Route::get('/', 'admin\HomeController@Home')->name('admin-home');
    Route::get('/dashboard', 'admin\HomeController@Home')->name('admin-home');
    Route::resource('kabupaten', 'admin\KabupatenController');
    Route::resource('kecamatan', 'admin\KecamatanController');
    Route::get('/getKecamatan/{id}', 'admin\KecamatanController@getKecamatan');
    Route::resource('desa', 'admin\DesaController');
    Route::prefix('potensi')->group(function () {
        Route::resource('sekolah', 'admin\SekolahController');
        Route::resource('tempatibadah', 'admin\TempatIbadahController');
        Route::resource('tempatwisata', 'admin\TempatWisataController');
        Route::resource('pasar', 'admin\PasarController');
    });
    Route::get('/logout','admin\AuthController@logout')->name('admin-logout');
});
