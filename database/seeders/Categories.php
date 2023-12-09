<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::unprepared("INSERT INTO `categories` (`id`, `title`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
        (1, 'Anime', 'anime', NULL, '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (2, 'Romance', 'romance', NULL, '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (3, 'Philosophie', 'philosophie', NULL, '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (4, 'Politics', 'politics', NULL, '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (5, 'Gaming', 'gaming', NULL, '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (6, 'Shojo', 'shojo', 1, '2023-12-04 20:58:14', '2023-12-08 21:26:56'),
        (8, 'Proposal', 'proposal', 2, '2023-12-04 20:58:14', '2023-12-08 21:25:14'),
        (16, 'ActionAnimes', 'actionanimes', 1, '2023-12-06 12:53:04', '2023-12-06 12:53:04'),
        (17, 'VR Gaming', 'vr-gaming', 5, '2023-12-08 21:13:44', '2023-12-08 21:13:44'),
        (18, 'E-Sports', 'e-sports', 5, '2023-12-08 21:14:28', '2023-12-08 21:14:28'),
        (19, 'Democracy', 'democracy', 4, '2023-12-08 21:16:50', '2023-12-08 21:16:50'),
        (20, 'Civil Rights', 'civil-rights', 4, '2023-12-08 21:18:19', '2023-12-08 21:18:19'),
        (21, 'Metaphysics', 'metaphysics', 3, '2023-12-08 21:20:57', '2023-12-08 21:20:57'),
        (22, 'Phenomenology', 'phenomenology', 3, '2023-12-08 21:22:11', '2023-12-08 21:22:11'),
        (23, 'Relationship', 'relationship', 2, '2023-12-08 21:23:29', '2023-12-08 21:23:29'),
        (24, 'Isekai', 'isekai', 1, '2023-12-08 21:28:11', '2023-12-08 21:28:11');");

        // Category::create([
        //     'title' => $title = 'Anime',
        //     'slug' => Str::slug($title),
        //     'id' => 1
        // ]);
        // Category::create([
        //     'title' => $title = 'Romance',
        //     'slug' => Str::slug($title),
        //     'id' => 2
        // ]);
        // Category::create([
        //     'title' => $title = 'Philosophie',
        //     'slug' => Str::slug($title),
        //     'id' => 3
        // ]);
        // Category::create([
        //     'title' => $title = 'Politics',
        //     'slug' => Str::slug($title),
        //     'id' => 4
        // ]);
        // Category::create([
        //     'title' => $title = 'Gaming',
        //     'slug' => Str::slug($title),
        //     'id' => 5
        // ]);

        // Category::create([
        //     'title' => $title = 'Anime_variation 1',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 1
        // ]);
        // Category::create([
        //     'title' => $title = 'Anime_variation 2',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 1
        // ]);

        // Category::create([
        //     'title' => $title = 'Romance_variation 1',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 2
        // ]);
        // Category::create([
        //     'title' => $title = 'Romance_variation 2',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 2
        // ]);

        // Category::create([
        //     'title' => $title = 'Philo_variation 1',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 3
        // ]);
        // Category::create([
        //     'title' => $title = 'Philo_variation 2',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 3
        // ]);

        // Category::create([
        //     'title' => $title = 'Politics_variation 1',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 4
        // ]);
        // Category::create([
        //     'title' => $title = 'Politics_variation 2',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 4
        // ]);

        // Category::create([
        //     'title' => $title = 'Gaming_variation 1',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 5
        // ]);

        // Category::create([
        //     'title' => $title = 'Gaming_variation 2',
        //     'slug' => Str::slug($title),
        //     'parent_id' => 5
        // ]);

    }
}
