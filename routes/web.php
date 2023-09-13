<?php

use App\Livewire\User;
use App\Livewire\Office;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('login');
    
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/users', User::class)->name('users.index');

    Route::get('/offices', Office::class)->name('offices.index');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
