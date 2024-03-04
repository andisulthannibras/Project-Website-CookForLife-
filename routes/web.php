<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResepController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\Detail_2Controller;
use App\Http\Controllers\Detail_3Controller;
use App\Http\Controllers\Detail_4Controller;
use App\Http\Controllers\Resep_2Controller;
use App\Http\Controllers\Resep_3Controller;
use App\Http\Controllers\Resep_4Controller;


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

Route::get('/resep',[ResepController::class, 'index']); 
Route::get('/detail resep/{id}', [ResepController::class, 'show']); 
// Route::get('/detail resep', [ResepController::class, 'index']); 
// Route::get('/resep',[Resep_3Controller::class, 'index']); 
// Route::get('/resep',[Resep_4Controller::class, 'index']); 

//detail resep
Route::get('/detail resep', [DetailController::class, 'index']);
// Route::get('/detail resep 2', [Detail_2Controller::class, 'index']);
// Route::get('/detail resep 3', [Detail_3Controller::class, 'index']);
// Route::get('/detail resep 4', [Detail_4Controller::class, 'index']);

//login register routes
Route::get('authenticated', [AuthenticationController::class, 'authenticated']);
// Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'login'])->name('login'  );
Route::post('register', [AuthenticationController::class, 'register'])->name('register');
Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class,'index'])->name('home');
// Route::post('register', [AuthenticationController::class, 'register'])->name('register');
// Route::get('authenticated', [AuthenticationController::class, 'authenticated']);


//prefix profile
Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::get('/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/{id}', [ProfileController::class, 'update'])->name('profile.update');
});