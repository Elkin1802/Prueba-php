<?php

use Illuminate\Support\Facades\Route;

route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
