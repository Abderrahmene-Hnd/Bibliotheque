<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    public function users()
    {
        $this->hasMany(User::class);
    }
    public const IS_ADMIN = 1;
    public const IS_MANAGER = 2;
    public const IS_USER = 3;

}
