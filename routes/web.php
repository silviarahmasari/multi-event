<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('layout.mainlayout_u');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', [UsersController::class, 'preLogin'])->name('login');
Route::post('/post_login', [UsersController::class, 'postLogin'])->name('post_login');
Route::get('/register', [UsersController::class, 'preRegister'])->name('register');
Route::post('/post_register', [UsersController::class, 'postRegister'])->name('post_register');
Route::get('/logout', [UsersController::class, 'Logout'])->name('logout');

Route::middleware(['auth', 'CheckRole:1'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard.admin');
    });
});

Route::middleware(['auth', 'CheckRole:3'])->group(function () {
    Route::get('/camat', function () {
        return view('dashboard.camat');
    });
});
