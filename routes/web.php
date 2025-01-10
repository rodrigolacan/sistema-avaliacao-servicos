<?php

use App\Http\Controllers\contents\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'home'])->name('index');
