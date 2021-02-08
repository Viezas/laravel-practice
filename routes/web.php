<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact.form');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
