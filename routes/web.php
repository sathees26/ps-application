<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Product;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/', function () {
    return Inertia::render(
        'Home',
    );
})->name('home');


Route::get('/about-us', function () {
    return Inertia::render(
        'AboutUs'
    );
})->name('about-us');


Route::get('/order-list', function () {
    return Inertia::render(
        'OrderList',
        [
            'categories' => Category::with('products')->get(),
        ]
    );
})->name('order-list');



Route::get('/products', function () {
    return Inertia::render(
        'Products',
        [
            'products' => Product::all(),
        ]
    );
})->name('products');

Route::get('/contact-us', function () {
    return Inertia::render(
        'ContactUs'
    );
})->name('contact-us');

Route::get('/address', function () {
    return Inertia::render(
        'Address'
    );
})->name('address');

Route::get('/order', function () {
    return Inertia::render(
        'Order'
    );
})->name('order');

Route::get('/account-details', function () {
    return Inertia::render(
        'AccountDetails'
    );
})->name('account-details');

Route::get('/change-password', function () {
    return Inertia::render(
        'ChangePassword'
    );
})->name('change-password');

Route::get('/cart', function () {
    return Inertia::render(
        'cart'
    );
})->name('change-password');

/////////////products////////////



Route::get('/kids-gun', function () {
    return Inertia::render('Kids-gun');
})->name('kids-gun');

Route::post('order-list');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
