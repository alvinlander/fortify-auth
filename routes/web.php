<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\{
    ProfileController,
    UpdatePasswordController
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'home');
Route::middleware('auth', 'verified')->group(function () {
    Route::view('/dashboard', 'dashboard');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/edit', [ProfileController::class, 'updateProfile']);
    Route::get('/profile/update-password', [UpdatePasswordController::class, 'edit'])->name('password.edit');
    Route::put('/profile/update-password', [UpdatePasswordController::class, 'updatePassword']);
});
