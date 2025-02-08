<?php

use App\Http\Controllers\ViewCarsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;

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

Route::get('/cars/view', [ViewCarsController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarsController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarsController::class, 'store'])->name('cars.store');
Route::delete('/cars/{identifier}', [DeleteController::class, 'deleteCar'])->name('cars.delete');
Route::get('/cars/{id}/edit', [UpdateController::class, 'edit'])->name('cars.edit');
Route::patch('/cars/{id}', [UpdateController::class, 'update'])->name('cars.update');

require __DIR__.'/auth.php';
