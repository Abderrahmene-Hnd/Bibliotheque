<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Features;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Features :
        Features::factory()->create(["image"=>"images/poor-dad-rich-dad.jpg"]);
        Features::factory()->create(["image"=>"images/2657.jpg"]);
        Features::factory()->create(["image"=>"images/9717.jpg"]);
        Features::factory()->create(["image"=>"images/63697.jpg"]);
        Features::factory()->create(["image"=>"images/128029.jpg"]);
        Features::factory()->create(["image"=>"images/10073506.jpg"]);

        //Users :
        User::factory()->create([
            'username'=>'Abderrahmene',
            'email'=>'abdouhnd31@gmail.com',
            'is_admin'=>1,
            'role_id'=>1
        ]);
        User::factory()->create([
            'username'=>'Amine',
            'is_admin'=>0,
            'role_id'=>2
        ]);
        User::factory()->create([
            'username'=>'Youcef',
            'email_verified_at'=>Carbon::now(),
            'is_admin'=>0,
            'role_id'=>3
        ]);

        //Roles :
        Role::create([
            'name'=>'Administator'
        ]);
        Role::create([
            'name'=>'Manager'
        ]);
        Role::create([
            'name'=>'Client'
        ]);
    }
}
