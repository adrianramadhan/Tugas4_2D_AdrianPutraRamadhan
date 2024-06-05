<?php

use App\Http\Controllers\KhsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [KhsController::class, 'index'])->name('khs.index');
