<?php

use App\view\Pages\Auth\Login;
use App\view\Pages\Auth\Logout;
use App\view\Pages\Auth\Register;

use App\view\Pages\Frontend\Show;
use App\view\Pages\Frontend\Index;
use Illuminate\Support\Facades\Route;

use App\view\Pages\Backend\Client\ClientDashboard;
use App\view\Pages\Backend\Admin\Dashboard\Dashboard;

use App\view\Pages\Backend\Admin\UsersManager\UserIndex;
use App\view\Pages\Backend\Admin\UsersManager\UserCreate;
use App\view\Pages\Backend\Admin\UsersManager\UserUpdate;

use App\view\Pages\Backend\Admin\Dashboard\Book\BookIndex;
use App\view\Pages\Backend\Admin\Dashboard\Book\BookCreate;
use App\view\Pages\Backend\Admin\Dashboard\Book\BookUpdate;

use App\view\Pages\Backend\Admin\Dashboard\Category\CategoryIndex;
use App\view\Pages\Backend\Admin\Dashboard\Category\CategoryCreate;
use App\view\Pages\Backend\Admin\Dashboard\Category\CategoryUpdate;

use App\view\Pages\Backend\Admin\Dashboard\Author\AuthorIndex;
use App\view\Pages\Backend\Admin\Dashboard\Author\AuthorCreate;
use App\view\Pages\Backend\Admin\Dashboard\Author\AuthorUpdate;

use App\view\Pages\Auth\PasswordManager\ResetPassword_Store;
use App\view\Pages\Auth\PasswordManager\ForgetPassword_Store;

use App\view\Pages\Auth\PasswordManager\ResetPassword_Create;
use App\view\Pages\Auth\PasswordManager\ForgetPassword_Create;

Route::get('/', Index::class)->name('home');
Route::get('/books/{book:slug}', Show::class);


Route::middleware('guest')->group(function () {
Route::get('/register', Register::class);
Route::get('/login', Login::class);
});

Route::middleware('auth')->group(function () {
Route::post('/logout', Logout::class);
Route::get('/settings', ClientDashboard::class);
});

Route::middleware('can:admin')->group(function () {
Route::get('/dashboard/user', UserIndex::class);
Route::get('/dashboard/user/create', UserCreate::class);
Route::get('/dashboard/user/{id}/edit', UserUpdate::class);
});

Route::middleware('can:manager')->group(function () {
Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/book', BookIndex::class);
Route::get('/dashboard/book/create', BookCreate::class);
Route::get('/dashboard/book/{id}/edit', BookUpdate::class );
Route::get('/dashboard/category', CategoryIndex::class);
Route::get('/dashboard/category/create', CategoryCreate::class);
Route::get('/dashboard/category/{id}/edit', CategoryUpdate::class);
Route::get('/dashboard/author', AuthorIndex::class);
Route::get('/dashboard/author/create', AuthorCreate::class);
Route::get('/dashboard/author/{id}/edit', AuthorUpdate::class);
});

Route::get('/forget-password', ForgetPassword_Create::class);
Route::post('/forget-password', ForgetPassword_Store::class);

Route::get('/reset-password/{token}', ResetPassword_Create::class);
Route::post('/reset-password', ResetPassword_Store::class);

