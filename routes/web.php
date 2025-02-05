<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Mostra o formulário de login

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Lida com a requisição de login

Route::post('/login', [AuthController::class, 'login']);

// Lida com o Logout do Usuário

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Mostra o Formulário de Registro

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Lida com a requisição de registro

Route::post('/register', [AuthController::class, 'register']);


Route::middleware(['auth'])->group(function () {

});
