<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
