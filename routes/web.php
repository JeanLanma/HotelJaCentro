<?php

use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('home');

Route::get('installations', [FrontController::class, 'installations'])->name('installations');

Route::get('rooms', [FrontController::class, 'rooms'])->name('rooms');

Route::get('services', [FrontController::class, 'services'])->name('services');

Route::get('contact', [FrontController::class, 'contact'])->name('contact');
