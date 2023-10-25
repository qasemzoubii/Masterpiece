<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\CategoryDashController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderitemController;
use App\Http\Controllers\DiscountController;
use App\Http\Livewire\SearchComponent;
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

Route::get('/search', SearchComponent::class)->name('product.search');


Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/shop/{category_id}', [ProductController::class, 'shop'])->name('shop');
Route::get('/viewProduct/{product_id}', [ProductController::class, 'product'])->name('products');




Route::get('index', function () {
    return view('admin.pages.index');
})->name('index');
Route::get('profilee', function () {
    return view('admin.pages.profile');
});

// Route::resource('category', CategoryController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('contacts', ContactController::class);
Route::resource('user', UserDashController::class);
Route::resource('order', OrderController::class);
Route::resource('discount', DiscountController::class);

Route::get('/showOrder/{order_id}', [OrderitemController::class, 'showOrder'])->name('showOrder');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/updateS', [CartController::class, 'cartUpdateS'])->name('cartUpdateS');
Route::post('/cart/updateD', [CartController::class, 'cartUpdateD'])->name('cartUpdateD');


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


Route::get('/checkout',[OrderController::class, 'checkoutView'])->name('checkout');

Route::post('/checkout/pay', [OrderController::class,'pay'])->name('pay');
Route::get('paypal/success', [OrderController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel',  [OrderController::class, 'cancel'])->name('paypal_cancel');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';