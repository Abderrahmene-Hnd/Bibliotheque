<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Authors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::unprepared("INSERT INTO `authors` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
        (6, 'Lev Tolstoy', 'lev-tolstoy', '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (7, 'Fyodor Dostoevsky', 'fyodor-dostoevsky', '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (8, 'Dante Alighieri', 'dante-alighieri', '2023-12-04 20:58:14', '2023-12-04 20:58:14'),
        (16, 'Hans Aanrud', 'hans-aanrud', '2023-12-07 16:49:50', '2023-12-07 16:49:50'),
        (17, 'Verna Aardema', 'verna-aardema', '2023-12-07 16:50:04', '2023-12-07 16:50:04'),
        (18, 'David Aaron', 'david-aaron', '2023-12-07 16:50:14', '2023-12-07 16:50:14'),
        (19, 'Jane Aaron ', 'jane-aaron', '2023-12-07 16:50:26', '2023-12-07 16:50:26'),
        (20, 'Jonathan Aaron', 'jonathan-aaron', '2023-12-07 16:50:41', '2023-12-07 16:50:41');");


        // Author::create([
        //     'name' => $name = 'Fyodor Dostoevsky',
        //     'slug' => Str::slug($name),

        // ]);
        // Author::create([
        //     'name' => $name = 'Dante Alighieri',
        //     'slug' => Str::slug($name),

        // ]);
        // Author::create([
        //     'name' => $name = 'Lev Tolstoy',
        //     'slug' => Str::slug($name),

        // ]);
        // Author::create([
        //     'name' => $name = 'Fyodor Dostoevsky',
        //     'slug' => Str::slug($name),

        // ]);
        // Author::create([
        //     'name' => $name = 'Dante Alighieri',
        //     'slug' => Str::slug($name),

        // ]);
        // Author::create([
        //     'name' => $name = 'Lev Tolstoy',
        //     'slug' => Str::slug($name),

        // ]);
        // Author::create([
        //     'name' => $name = 'Fyodor Dostoevsky',
        //     'slug' => Str::slug($name),

        // ]);
        // Author::create([
        //     'name' => $name = 'Dante Alighieri',
        //     'slug' => Str::slug($name),

        // ]);
    }
}
