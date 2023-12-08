<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Comments extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::factory(2)->create([
            'user_id' => rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id' => rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id' => rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id' => rand(1, 10)
        ]);
        Comment::factory(2)->create([
            'user_id' => rand(1, 10)
        ]);
    }
}
