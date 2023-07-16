<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('dashboard', function() {
        return view('dashboard.home');
    })->name('dashboard');

    Route::get('edit-profile', function() {
        return view('dashboard.profile');
    })->name('profile.edit');

    Route::resource('user-management', UserController::class);
});
