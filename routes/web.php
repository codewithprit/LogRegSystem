<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PracticeController;

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
    return view('welcome');
});

// Route::get('/about', function (){
//     return view('about');
// });
// Route::view('abouts', 'about');
// Route::get("abouts", [PracticeController::class, 'about']);
// Route::post('login', [PracticeController::class, 'login']);
// Route::view("users", 'users');

Route::get('/login', [PracticeController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PracticeController::class, 'login']);

Route::get('/register', [PracticeController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [PracticeController::class, 'register']);
Route::get('/dashboard', [PracticeController::class, 'dashboard'])->name('dashboard');