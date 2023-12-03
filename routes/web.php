<?php

use App\Models\Category;
use App\view\Pages\Auth\Login;
use App\view\Pages\Auth\Logout;
use App\view\Pages\Auth\Register;
use App\view\Pages\Frontend\Show;
use App\view\Pages\Frontend\Index;
use Illuminate\Support\Facades\Route;
use App\view\Pages\Backend\Admin\Dashboard;
use App\view\Pages\Backend\Admin\AdminsManager;
use App\view\Pages\Backend\Client\ClientDashboard;

use App\view\Pages\Backend\Admin\AdminsManager\AdminCreate;
use App\view\Pages\Backend\Admin\AdminsManager\AdminUpdate;

use App\view\Pages\Backend\Admin\Dashboard\Category\CategoryCreate;
use App\view\Pages\Backend\Admin\Dashboard\Category\CategoryUpdate;

use App\view\Pages\Backend\Admin\Dashboard\Author\AuthorCreate;
use App\view\Pages\Backend\Admin\Dashboard\Author\AuthorUpdate;

use App\view\Pages\Backend\Admin\Dashboard\Book\BookCreate;
use App\view\Pages\Backend\Admin\Dashboard\Book\BookUpdate;

use App\view\Pages\Auth\PasswordManager\ResetPassword_Store;
use App\view\Pages\Auth\PasswordManager\ResetPassword_Create;

use App\view\Pages\Auth\PasswordManager\ForgetPassword_Store;
use App\view\Pages\Auth\PasswordManager\ForgetPassword_Create;


Route::get('/', Index::class)->name('home');
Route::get('/books/{book:slug}', Show::class);

Route::get('/register', Register::class)->middleware('guest');
Route::get('/login', Login::class)->middleware('guest');

Route::post('/logout', Logout::class)->middleware('auth');
Route::get('/settings', ClientDashboard::class)->middleware('auth');


Route::get('/dashboard/admin', AdminsManager::class)->middleware('can:admin');

Route::get('/dashboard/admin/create', AdminCreate::class)->middleware('can:admin');
Route::get('/dashboard/admin/{id}/edit', AdminUpdate::class)->middleware('can:admin');


Route::get('/dashboard', Dashboard::class)->middleware('can:manager');

Route::get('/dashboard/book/create', BookCreate::class)->middleware('can:manager');
Route::get('/dashboard/book/{id}/edit', BookUpdate::class)->middleware('can:manager');

Route::get('/dashboard/category/create', CategoryCreate::class)->middleware('can:manager');
Route::get('/dashboard/category/{id}/edit', CategoryUpdate::class)->middleware('can:manager');

Route::get('/dashboard/author/create', AuthorCreate::class)->middleware('can:manager');
Route::get('/dashboard/author/{id}/edit', AuthorUpdate::class)->middleware('can:manager');









Route::get('/categories', function () {
    $categories = Category::tree()->get()->toTree();

    return view('categories', [
        'categories' => $categories
    ]);
});



Route::get('/forget-password', ForgetPassword_Create::class);
Route::post('/forget-password', ForgetPassword_Store::class);

Route::get('/reset-password/{token}', ResetPassword_Create::class);
Route::post('/reset-password', ResetPassword_Store::class);

