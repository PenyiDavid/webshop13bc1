<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AddressController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

Route::get('/new-role', function() {
    return view('roles.store');
});
Route::post('/new-role', [RoleController::class, 'store'])->name('role.store');

Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');

Route::get('/new-address', function(){
    $users = User::all();
    return view('addresses.store', compact('users'));
});
Route::post('/new-address', [AddressController::class, 'store'])->name('address.store');
require __DIR__.'/auth.php';
