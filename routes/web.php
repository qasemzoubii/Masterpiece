<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryDashController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});
Route::get('index', function () {
    return view('admin.pages.index');
});

// Route::resource('category', CategoryController::class);
Route::resource('category', CategoryDashController::class);


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/dash', function () {
    return view('admin.pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/shop', function () {
    return view('pages.shop');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
