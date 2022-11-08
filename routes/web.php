<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use const App\Http\Controllers\Auth;

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

Route::get('/', [\App\Http\Controllers\Site\HomeController::class, 'index']);
Route::get('/download', [\App\Http\Controllers\Site\HomeController::class, 'download'])->name('download');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'show'])->name('login');
Route::post('post-login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('dashboard', [\App\Http\Controllers\FeedBackController::class, 'dashboard'])->name('dashboard');

//store feedback
Route::group(['prefix' => 'auth'], function () {
    Route::post('feedback', [\App\Http\Controllers\FeedBackController::class, 'store'])->name('store.description');
});


Route::get('/resume', [ResumeController::class, 'show'])->name('resume');
Route::get('/blogs', [\App\Http\Controllers\Site\BlogController::class, 'index'])->name('blogs');
Route::get('/contacts', [\App\Http\Controllers\Site\ContactController::class, 'index'])->name('contacts');
