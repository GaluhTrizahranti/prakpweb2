<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\pesanancontroller;





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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('sneat.html.beranda');
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


require __DIR__.'/auth.php';

Route::resource('/pesan',PesanController::class);
Route::resource('/home',HomeController::class);
Route::resource('/tambah',pesanancontroller::class);

Route::get('/pesan/tambah',[PesanController::class, 'create']);
Route::post('/pesan/store',[TambahController::class, 'store']);
Route::get('/pesan/edit/{id_pesan}',[PesanController::class, 'edit']);
Route::put('/pesan/{id_pesan}',[PesanController::class, 'update']);


Route::delete('/pesan/{id_pesan)',[PesanController::class, 'destroy']);

