<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;

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
Route::get('/chat',[userscontroller::class,'my_home'])->name('home');
Route::get('/',[userscontroller::class,'login_page'])->name('login_page');
Route::get('/register',[userscontroller::class,'register_page'])->name('register_page');

#registration 
Route::post('/users/register',[userscontroller::class,'register'])->name('register');

#login 
Route::post('/users/login',[userscontroller::class,'login'])->name('login');

#logout 
Route::get('/users/logout',[userscontroller::class,'logout'])->name('logout');

#select user 
Route::get('/users/select_user/{reciverId}',[userscontroller::class,'select_user'])->name('select_user');

#user chat 
Route::post('/users/chat',[userscontroller::class,'chat'])->name('chat');