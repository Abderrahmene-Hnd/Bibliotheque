<?php

namespace App\Providers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //$this->registerPolicies();
        // Blade::if('create', function () {
        //     return request()->user()?->can('create', Task::class);
        // });
        // Blade::if('update', function () {
        //     return request()->user()?->can('update', Task::class);
        // });
        // Blade::if('delete', function () {
        //     return request()->user()?->can('delete', Task::class);
        // });

        // Blade::if('admin', function () {
        //     return request()->user()?->can('admin', Task::class);
        // });
        /**
         * For Multiple admins but without $tasks :
         */


        /**
         * For one admin but without $tasks :
         */


        /*
        All permissions availble to use in blade :

        @admin
        //
        @endadmin

        @create
        //
        @endcreate

        @foreach ( $tasks as $task )

        @can('update',$task)
        //
        @endcan

        @can('delete',$task)
        //
        @endcan

        @endforeach
        */

        // old :


    }
}
