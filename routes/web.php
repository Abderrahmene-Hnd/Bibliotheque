<?php

use App\view\Test;
use App\view\Pages\Auth\Login;
use App\view\Pages\Auth\Logout;
use App\view\Pages\Auth\Register;
use App\view\Pages\Frontend\Show;
use App\view\Pages\Frontend\Index;
use Illuminate\Support\Facades\Route;
use App\view\Components\Sections\Comments;
use App\view\Pages\Backend\Admin\Dashboard;
use App\view\Pages\Backend\Admin\AdminsManager;
use App\view\Pages\Backend\Admin\Dashboard\BookStore;
use App\view\Pages\Backend\Admin\Dashboard\BookCreate;
use App\view\Pages\Backend\Admin\Dashboard\BookDelete;
use App\view\Pages\Backend\Admin\Dashboard\BookUpdate;
use App\view\Pages\Backend\Admin\AdminsManager\AdminCreate;
use App\view\Pages\Backend\Admin\AdminsManager\AdminDelete;
use App\view\Pages\Backend\Admin\AdminsManager\AdminUpdate;
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

Route::get('/', Index::class)->name('home');

Route::get('/books/{book:slug}', Show::class);

Route::get('/dashboard/admin', AdminsManager::class)->middleware('can:admin');
//........... Admins CRUD...........
Route::get('/admin/register', AdminCreate::class)->middleware('can:admin');
Route::post('/admin/{user:id}/edit', AdminUpdate::class)->middleware('can:admin');
Route::post('/admin/delete', AdminDelete::class)->middleware('can:admin');

Route::get('/dashboard', Dashboard::class)->middleware('can:manager');
//...........Books CRUD............
Route::get('/dashboard/create', BookCreate::class)->middleware('can:manager');
Route::post('/dashboard/{book:id}/edit', BookUpdate::class)->middleware('can:manager');
Route::post('/dashboard/delete', BookDelete::class)->middleware('can:manager');

Route::get('/comments', Comments::class);

Route::get('/register', Register::class);

Route::get('/login', Login::class)->name('login');

Route::post('/logout', Logout::class);

Route::get('/forget-password', ForgetPassword_Create::class);
Route::post('/forget-password', ForgetPassword_Store::class);

Route::get('/reset-password/{token}', ResetPassword_Create::class);
Route::post('/reset-password', ResetPassword_Store::class);

Route::get('admin/tasks', [App\Http\Controllers\Admin\TaskController::class, 'index'])->middleware('is_admin');

Route::get('user/tasks', [App\Http\Controllers\User\TaskController::class, 'index']);
