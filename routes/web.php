<?php

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
    return view('admin.login');
});

Route::get('/login', 'AdminController@login');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/generalform', 'AdminController@generalform');
Route::get('/kartustock', 'AdminController@kartustock');
Route::get('/persediaanobat', 'AdminController@persediaanobat');
Route::get('/dataadmin', 'AdminController@dataadmin');
Route::get('/ubahprofil', 'AdminController@ubahprofil');
Route::get('/riwayat', 'AdminController@riwayat');
Route::get('/profil', 'AdminController@profil');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
