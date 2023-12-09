<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Book_Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::unprepared("INSERT INTO `book_categories` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
        (12, 6, 6, '2023-12-04 21:30:56', '2023-12-04 21:30:56'),
        (28, 8, 8, NULL, NULL),
        (39, 16, 6, NULL, NULL),
        (42, 17, 20, NULL, NULL),
        (43, 15, 23, NULL, NULL),
        (44, 14, 16, NULL, NULL),
        (45, 13, 21, NULL, NULL),
        (46, 12, 8, NULL, NULL),
        (47, 10, 19, NULL, NULL),
        (48, 9, 17, NULL, NULL),
        (51, 7, 18, NULL, NULL),
        (52, 5, 22, NULL, NULL),
        (53, 3, 23, NULL, NULL),
        (54, 2, 16, NULL, NULL),
        (55, 1, 19, NULL, NULL);");
    }
}
