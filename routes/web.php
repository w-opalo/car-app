<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Auth\Events\Login;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/jobs/{id}', function ($id) {
//     return "hello $id";
// });
// Route::get('/jobs/{id}/user/{id}', function ($id, $id) {
//     return "hello $id";
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [CarController::class, 'search']);
Route::get('/car', CarController::class);
Route::get('/signup', [SignupController::class, 'create']);
Route::get('/login', [LoginController::class, 'login']);
