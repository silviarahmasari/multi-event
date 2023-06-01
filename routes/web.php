<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SubDistrictProfileController;
use App\Http\Controllers\ContactPeopleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SportController;

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
// Route::get('/', function () {
//     return view('layout.mainlayout_u');
// });

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/', [UsersController::class, 'indexLogin'])->name('login');
Route::post('/post_login', [UsersController::class, 'postLogin'])->name('post_login');
Route::get('/register', [UsersController::class, 'preRegister'])->name('register');
Route::post('/post_register', [UsersController::class, 'postRegister'])->name('post_register');
Route::get('/logout', [UsersController::class, 'Logout'])->name('logout');

Route::middleware(['auth', 'CheckRole:1'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'adminCount']);

    // sport -> cabor
    Route::get('/sport/index', [SportController::class, 'index']);
    Route::get('/sport/create', [SportController::class, 'create']);
    Route::post('/sport/store', [SportController::class, 'store']);
    Route::get('/sport/show/{sport}', [SportController::class, 'show']);
    Route::get('/sport/edit/{sport}', [SportController::class, 'edit']);
    Route::post('/sport/update/{sport}', [SportController::class, 'update']);
    Route::get('/sport/delete/{sport}', [SportController::class, 'destroy']);
});

Route::middleware(['auth', 'CheckRole:3'])->group(function () {
    Route::get('/camat', [DashboardController::class, 'camatCount']);
    
    Route::get('/subprofil/editsubprofil', [SubDistrictProfileController::class, 'indexupdateSubProfile']);
    Route::post('/subprofil/updateSubProfile', [SubDistrictProfileController::class, 'updateSubProfile']);
    Route::post('/subprofil/updatecontactpeople', [SubDistrictProfileController::class, 'updateContactPeople']);
});
