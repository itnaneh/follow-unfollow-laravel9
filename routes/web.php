<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        $users =User::all();
        return view('welcome')->with([
            'users' => $users,
        ]);
    });
    Route::post('/logout',[UserController::class , 'logout'])->name('logout');
    Route::get('user/{following_id}/follow',[UserController::class,'follow'])->name('follow');
    Route::get('user/{following_id}/unfollow',[UserController::class,'unfollow'])->name('unfollow');
});
Route::get('/register',[UserController::class , 'registerForm'])->name('register');
Route::get('/login',[UserController::class , 'loginForm'])->name('login');
Route::post('/register',[UserController::class , 'store'])->name('register');
Route::post('/login',[UserController::class , 'auth'])->name('login');


