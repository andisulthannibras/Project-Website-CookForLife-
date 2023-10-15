<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile/all');
});

Route::get('/resep', function () {
    return view('resep/all');
});

Route::get('/register', function () {
    return view('register/all');
});

Route::get('/login', function () {
    return view('login/all');
});

Route::get('/detail resep', function () {
    return view('detail resep/all');
}); 

Route::get('/detail resep 2', function () {
    return view('detail resep 2/all');
}); 
//login register routes
Route::get('authenticated', [AuthenticationController::class, 'authenticated']);
// Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'login'])->name('login'  );
Route::post('register', [AuthenticationController::class, 'register'])->name('register');
Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::post('register', [AuthenticationController::class, 'register'])->name('register');
Route::get('authenticated', [AuthenticationController::class, 'authenticated']);

//Profile
// Route::get('profile', [ProfileController::class, 'profile'])->name('profile')->middleware('auth');