<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
// use App\Models\Customer;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/',function () {
    return view('index');
});
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/customer/create', [CustomerController::class, 'create'])->name('custome.create');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::post('/customer', [CustomerController::class, 'store']);

// require __DIR__.'/auth.php';
