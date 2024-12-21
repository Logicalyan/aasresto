<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\ProfileController;

//Admin
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');


    //Route for see profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    Route::resource('order', OrderController::class);

    //Route for cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add-cart/{id}', [CartController::class, 'store'])->name('post.cart');
    Route::delete('/cart-items/{id}', [CartController::class, 'destroy'])->name('cart-item.destroy');

    //Groupping route for admin access
    Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {

        //Home for Admin
        Route::get('/home', [AdminController::class, 'index'])->name('admin.home');

        //Dashboard for admin
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        //Route For UserController
        Route::resource('user', UserController::class);

        //Route For MenuController
        Route::resource('menu', MenuController::class);

        //Route For CategoryController
        Route::resource('category', CategoryController::class);

        //Route For TableController
        Route::resource('table', TableController::class);

        // Route::post('add-order', [OrderController::class, 'addOrder'])->name('post.order');
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
