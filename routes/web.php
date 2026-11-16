<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customers.index');
});

// Public page
Route::get('/about', function () {
    return view('about');
})->name('about');

// After login, Breeze redirects here: send users to the notebook
Route::get('/dashboard', function () {
    return redirect()->route('customers.index');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    // The currently logged-in account
    Route::get('/account', function () {
        return view('account', ['user' => auth()->user()]);
    })->name('account');

    // Resource routes: index, create, store, show, edit, update, destroy
    Route::resource('customers', CustomerController::class);
    Route::resource('users', UserController::class);

    // Breeze profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';