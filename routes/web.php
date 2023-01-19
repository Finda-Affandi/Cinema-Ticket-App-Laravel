<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseraccountController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminMoviesController;
use App\Http\Controllers\AdmintransaksiController;
use App\Http\Controllers\AuthController;


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

// Get

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/about', function () {
    return view('main.about');
});

Route::get('/home', function () {
    return view('main.index');
});

Route::get('/adminhome', function () {
    return view('admin.index');
})->middleware('admin');

Route::get('/transaksi', function () {
    return view('admin.transaksi');
});




Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');

Route::post('/signup', [AuthController::class, 'signupStore'])->name('signupPost');

Route::post('/login', [AuthController::class, 'loginStore'])->name('loginPost');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Resources
Route::get('/main', [HomeController::class, 'index'])->name('home');

Route::resource('useraccount', UseraccountController::class);

Route::resource('movies', MoviesController::class);

Route::resource('seat', SeatController::class);

Route::resource('transaction', TransactionController::class);

Route::resource('/admin/posts', AdminMoviesController::class)->middleware('admin');

Route::resource('transaksi', AdmintransaksiController::class)->middleware('admin');

Route::resource('admin', AdminMoviesController::class)->middleware('admin');
