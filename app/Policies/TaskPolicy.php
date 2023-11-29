<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return auth()->check() && in_array($user->role_id,[Role::IS_ADMIN,Role::IS_MANAGER]);
    }
    /**
    * Determine whether the user can update the model.
    */
    public function update(User $user /*,Task $task*/): bool
    {
        return auth()->check() && in_array($user->role_id,[Role::IS_ADMIN,Role::IS_MANAGER]);
    }
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user /*,Task $task*/): bool
    {
        return auth()->check() && ($user->role_id==Role::IS_ADMIN || $user->is_admin);
    }
    /**
    * if One admin with full permissions:
    */
    public function admin(User $user): bool
    {
        return auth()->check() && ($user->is_admin);
    }










    /**
    * -------------------------------------------------------------------

    * without $tasks :
    */
    // public function updatex(User $user): bool
    // {
    //     return auth()->check() && ($user->Role==1 || $user->Role==2);
    // }
    // public function deletex(User $user): bool
    // {
    //     return auth()->check() && ($user->Role==1);
    // }












    /*
     * Determine whether the user can view any models.
    public function viewAny(User $user): bool
    {
        //
    }

     * Determine whether the user can view the model.

    public function view(User $user, Task $task): bool
    {
        //
    }

    /*
     * Determine whether the user can restore the model.

    public function restore(User $user, Task $task): bool
    {
        //
    }

    /*
     * Determine whether the user can permanently delete the model.

    public function forceDelete(User $user, Task $task): bool
    {
        //
    }
    */
}
