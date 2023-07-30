<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('Login',[AuthController::class,'Login_view'])->name('login');
Route::post('Post_login',[AuthController::class,'Post_login'])->name('Post_login');
Route::get('dashboard',function()
{
    return view('dashboard');
});
