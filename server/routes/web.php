<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DoctorDetailController;
use App\Http\Controllers\DoctorListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function() {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/doctor-list', [DoctorListController::class, 'doctorList']);

Route::get('/doctor-detail', [DoctorDetailController::class, 'doctorDetail']);

Route::get('/appointment', [AppointmentController::class, 'appointment']);

Route::get('/profile', [ProfileController::class, 'profile']);

Route::get('/article', [ArticleController::class, 'article']);

