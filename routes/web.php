<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;


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
Route::get('/home', function () {
    return view('home');
});





Route::get('/dashboard', function () {
    return view('dashboard');
});
// })->name('dahboard')->middleware('admin');




Route::resource('products',ProductController::class);

Route::resource('login',LoginController::class);
Route::resource('registration',RegisterController::class);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');



