<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use App\Models\Author;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Features;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Features :
        Features::factory()->create(["image" => "images/poor-dad-rich-dad.jpg"]);
        Features::factory()->create(["image" => "images/2657.jpg"]);
        Features::factory()->create(["image" => "images/9717.jpg"]);
        Features::factory()->create(["image" => "images/63697.jpg"]);
        Features::factory()->create(["image" => "images/128029.jpg"]);
        Features::factory()->create(["image" => "images/10073506.jpg"]);

        Comment::factory(2)->create([
            'user_id'=>rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id'=>rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id'=>rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id'=>rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id'=>rand(1, 10)
        ]);
        //Users :
        User::factory()->create([
            'username' => 'Abderrahmene',
            'email' => 'abdouhnd31@gmail.com',
            'is_admin' => 1,
            'role_id' => 1
        ]);
        User::factory()->create([
            'username' => 'Youcef',
            'email_verified_at' => Carbon::now(),
            'is_admin' => 0,
            'role_id' => 2
        ]);
        User::factory()->create([
            'username' => 'Amine',
            'is_admin' => 0,
            'role_id' => 3
        ]);
        User::factory(7)->create([
            'is_admin' => 0,
            'role_id' => 3
        ]);


        //Roles :
        Role::create([
            'name' => 'Administator'
        ]);
        Role::create([
            'name' => 'Manager'
        ]);
        Role::create([
            'name' => 'Client'
        ]);




        //categories:
        Category::factory(10)->create();

        //authors:
        Author::factory(10)->create();

        //books:
        Book::factory(10)->create();
    }
}
