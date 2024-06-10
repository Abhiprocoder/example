<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
// use App\Models\Customer;
use Illuminate\Http\Request;

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
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.trash');
Route::get('/customer/force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('force.delete');
Route::get('/customer/restore/{id}', [CustomerController::class, 'restore'])->name('custome.restore');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('custome.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('custome.update');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::get('/customer/trash', [CustomerController::class, 'trash']);
Route::post('/customer', [CustomerController::class, 'store']);

Route::get('get-all-session',function() {
     $session = session()->all();
     echo "<pre>";
     print_r($session);
});

Route::get('set-session',function(Request $request)
{
    $request->session()->put('name','abhishek');
    $request->session()->put('id','12');
    return redirect('get-all-session');
});

Route::get('destroy-session',function(Request $request)
{
   session()->forget(['name','id']);
    return redirect('get-all-session');
});


// require __DIR__.'/auth.php';
