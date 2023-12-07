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
Route::get('/books/{id}', Show::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class);
    Route::get('/login', Login::class);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', Logout::class);
    Route::get('/settings', ClientDashboard::class);
});


Route::prefix('dashboard')->group(function () {

    Route::middleware('can:admin')->prefix('user')->group(function () {
        Route::get('/', UserIndex::class);
        Route::get('/create', UserCreate::class);
        Route::get('/{id}/edit', UserUpdate::class);
    });

    Route::middleware('can:manager')->group(function () {

        Route::get('/', Dashboard::class);
        Route::prefix('book')->group(function () {
            Route::get('/', BookIndex::class);
            Route::get('/create', BookCreate::class);
            Route::get('/{id}/edit', BookUpdate::class);
        });
        Route::prefix('category')->group(function () {
            Route::get('/', CategoryIndex::class);
            Route::get('/create', CategoryCreate::class);
            Route::get('/{id}/edit', CategoryUpdate::class);
        });
        Route::prefix('author')->group(function () {
            Route::get('/', AuthorIndex::class);
            Route::get('/create', AuthorCreate::class);
            Route::get('/{id}/edit', AuthorUpdate::class);
        });
    });
});








Route::get('/forget-password', ForgetPassword_Create::class);
Route::post('/forget-password', ForgetPassword_Store::class);

Route::get('/reset-password/{token}', ResetPassword_Create::class);
Route::post('/reset-password', ResetPassword_Store::class);
