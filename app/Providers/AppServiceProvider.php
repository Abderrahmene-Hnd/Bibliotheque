<?php

namespace App\Providers;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        
        Relation::morphMap([
            'Book'=>Book::class,
            'Author'=>Author::class,
            'Category'=>Category::class
        ]);







        Gate::define('Superadmin',function(User $user){
            return auth()->check() && $user->is_admin;
        });
        Gate::define('admin',function(User $user){
            return auth()->check() && ($user->role_id==1 || $user->is_admin);
        });
        Gate::define('manager',function(User $user){
            return auth()->check() && ($user->role_id==2 || $user->role_id==1 || $user->is_admin);
        });
        Gate::define('client',function(User $user){
            return auth()->check() && ($user->role_id==3 || $user->role_id==2 || $user->role_id==1 || $user->is_admin);
        });



        Blade::if('mainadmin',function () {
            return request()->user()?->can('mainadmin');
        });
        Blade::if('admin',function () {
            return request()->user()?->can('admin');
        });
        Blade::if('manager',function () {
            return request()->user()?->can('manager');
        });
        Blade::if('client',function () {
            return request()->user()?->can('client');
        });
    }
}
