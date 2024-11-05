<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Existing routes
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    });

// New routes for your HTML pages
Route::get('/', function () {
    return view('home'); // Corresponds to your home page Blade file
})->name('home');

Route::get('/now-showing', function () {
    return view('now-showing'); // Corresponds to your now-showing Blade file
})->name('now-showing');

Route::get('/coming-soon', function () {
    return view('coming-soon'); // Corresponds to your coming-soon Blade file
})->name('coming-soon');

// This line includes your authentication routes
require __DIR__.'/auth.php';
