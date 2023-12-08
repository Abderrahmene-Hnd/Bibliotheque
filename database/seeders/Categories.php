<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => $title = 'Anime',
            'slug' => Str::slug($title),
            'id' => 1
        ]);
        Category::create([
            'title' => $title = 'Romance',
            'slug' => Str::slug($title),
            'id' => 2
        ]);
        Category::create([
            'title' => $title = 'Philosophie',
            'slug' => Str::slug($title),
            'id' => 3
        ]);
        Category::create([
            'title' => $title = 'Politics',
            'slug' => Str::slug($title),
            'id' => 4
        ]);
        Category::create([
            'title' => $title = 'Gaming',
            'slug' => Str::slug($title),
            'id' => 5
        ]);

        Category::create([
            'title' => $title = 'Anime_variation 1',
            'slug' => Str::slug($title),
            'parent_id' => 1
        ]);
        Category::create([
            'title' => $title = 'Anime_variation 2',
            'slug' => Str::slug($title),
            'parent_id' => 1
        ]);

        Category::create([
            'title' => $title = 'Romance_variation 1',
            'slug' => Str::slug($title),
            'parent_id' => 2
        ]);
        Category::create([
            'title' => $title = 'Romance_variation 2',
            'slug' => Str::slug($title),
            'parent_id' => 2
        ]);

        Category::create([
            'title' => $title = 'Philo_variation 1',
            'slug' => Str::slug($title),
            'parent_id' => 3
        ]);
        Category::create([
            'title' => $title = 'Philo_variation 2',
            'slug' => Str::slug($title),
            'parent_id' => 3
        ]);

        Category::create([
            'title' => $title = 'Politics_variation 1',
            'slug' => Str::slug($title),
            'parent_id' => 4
        ]);
        Category::create([
            'title' => $title = 'Politics_variation 2',
            'slug' => Str::slug($title),
            'parent_id' => 4
        ]);

        Category::create([
            'title' => $title = 'Gaming_variation 1',
            'slug' => Str::slug($title),
            'parent_id' => 5
        ]);

        Category::create([
            'title' => $title = 'Gaming_variation 2',
            'slug' => Str::slug($title),
            'parent_id' => 5
        ]);
        
    }
}
