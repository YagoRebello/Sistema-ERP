<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;

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

Route::middleware('guest')->group(function () {
    session()->forget('tenant_id');
    Route::get('/login', [LoginController::class, 'mostrarFormularioLogin'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth.user');
});

Route::middleware('auth')->group(function() {
    Route::controller(PrincipalController::class)->group(function () {
        Route::get('/home', 'index')->name('home');
        Route::get('/admin', 'indexAdmin')->name('Principal.admin')->middleware('admin');
        Route::get('/adminAcesso{token}', 'adminAcesso')->name('Principal.adminAcesso')->middleware('admin');
    });

    Route::get('/', function () {
        return view('welcome');
    });
});
