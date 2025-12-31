<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KariyawanController;

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

Route::get('mhs', [MhsController::class, 'index']);

Route::get('blog', [BlogController::class, 'index']);
Route::get('tentang', [BlogController::class, 'tentang']);
Route::get('kontak', [BlogController::class, 'kontak']);

Route::get('kariyawan', [KariyawanController::class, 'index']);
Route::get('kariyawan/tambah', [KariyawanController::class, 'tambah']);
Route::post('kariyawan/store', [KariyawanController::class, 'store']);