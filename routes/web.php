<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [HomeController::class, 'Home']);
//Route::get('/ip', [HomeController::class, 'ip']);

Route::get('/ip', [HomeController::class, 'ip'])->name('ip');
Route::get('/sudo', [HomeController::class, 'sudo'])->name('sudo');