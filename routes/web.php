<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\OrderItemsController;

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/home/search', [HomeController::class, 'search'])->name('home.search');

    Route::resource('order', OrderController::class);
    Route::post("addOrder", [OrderController::class, "addOrder"])->name("addOrder");

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add-cart/{id}', [CartController::class, 'addCart'])->name('post.cart');
    Route::delete('/cart-items/{id}', [CartController::class, 'destroy'])->name('cart-item.destroy');

    // Route::get('/chart', [ChartController::class, 'index']);

    Route::get('menu/detail/{id}', [HomeController::class, 'detailMenu'])->name('menu.details');

    Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
        Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::resource('user', UserController::class);
        Route::resource('menu', MenuController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('table', TableController::class);

        Route::post('add-order', [OrderController::class, 'addOrder'])->name('post.order');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    //Auth register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register-proses', [AuthController::class, 'register_proses'])->name('post.register');

    //Auth login
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('post.login');

    //Forgot Password
    Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'post_request_email'])->name('password.email');

    //Reset Password
    Route::get('/reset-password/{token}', [AuthController::class, 'get_password'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'post_password'])->name('password.update');
});
