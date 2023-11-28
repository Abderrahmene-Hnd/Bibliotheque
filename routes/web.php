<?php

use App\view\Pages\Auth\Logout;
use App\view\Pages\Frontend\Index;
use Illuminate\Support\Facades\Route;
use App\view\Pages\Auth\Login\Login_Store;
use App\view\Pages\Auth\Login\Login_Create;
use App\view\Pages\Auth\Register\Register_Store;
use App\view\Pages\Auth\Register\Register_Create;
use App\view\Pages\Auth\PasswordManager\ResetPassword_Store;
use App\view\Pages\Auth\PasswordManager\ForgetPassword_Store;
use App\view\Pages\Auth\PasswordManager\ResetPassword_Create;
use App\view\Pages\Auth\PasswordManager\ForgetPassword_Create;

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

Route::get('/', Index::class);

Route::get('/register', Register_Create::class);
Route::post('/register', Register_Store::class);

Route::get('/login', Login_Create::class);
Route::post('/login', Login_Store::class);

Route::post('/logout', Logout::class);

Route::get('/forget-password',ForgetPassword_Create::class);
Route::post('/forget-password',ForgetPassword_Store::class);

Route::get('/reset-password/{token}',ResetPassword_Create::class);
Route::post('/reset-password',ResetPassword_Store::class);

Route::get('admin/tasks',[App\Http\Controllers\Admin\TaskController::class,'index'])->middleware('is_admin');

Route::get('user/tasks',[App\Http\Controllers\User\TaskController::class,'index']);
