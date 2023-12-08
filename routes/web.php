<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\view\Pages')->group(function () {
    Route::namespace('Frontend')->group(function () {
        Route::get('/', Index::class)->name('home');
        Route::get('/books/{id}', Show::class);
    });
    Route::namespace('Auth')->middleware('guest')->group(function () {
        Route::get('/register', Register::class);
        Route::get('/login', Login::class);
    });
});

Route::namespace('App\view\Pages')->middleware('auth')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::post('/logout', Logout::class);
    });
    Route::namespace('Backend')->group(function () {
        Route::namespace('Client')->group(function () {
            Route::get('/settings', Index::class)->middleware('auth');
        });
        Route::namespace('Admin')->prefix('dashboard')->group(function () {
            Route::namespace('UsersManager')->middleware('role:owner')->prefix('user')->group(function () {
                Route::get('/', Index::class);
                Route::get('/create', Create::class);
                Route::get('/{id}/edit', Update::class);
            });
            Route::namespace('Dashboard')->middleware('role:manager')->group(function () {
                Route::get('/', Index::class);

                Route::namespace('Book')->prefix('book')->group(function () {
                    Route::get('/', Index::class);
                    Route::get('/create', Create::class);
                    Route::get('/{id}/edit', Update::class)->middleware('permission:book-update');
                });
                Route::namespace('Category')->prefix('category')->group(function () {
                    Route::get('/', Index::class);
                    Route::get('/create', Create::class);
                    Route::get('/{id}/edit', Update::class)->middleware('permission:category-update');
                });
                Route::namespace('Author')->prefix('author')->group(function () {
                    Route::get('/', Index::class);
                    Route::get('/create', Create::class);
                    Route::get('/{id}/edit', Update::class)->middleware('permission:author-update');
                });
            });
        });
    });
});


Route::namespace('App\view\Pages\Auth\PasswordManager')->group(function () {
    Route::get('/forget-password', ForgetPassword_Create::class);
    Route::post('/forget-password', ForgetPassword_Store::class);
    Route::get('/reset-password/{token}', ResetPassword_Create::class);
    Route::post('/reset-password', ResetPassword_Store::class);
});
