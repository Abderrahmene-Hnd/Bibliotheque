<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Authors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => $name = 'Fyodor Dostoevsky',
            'slug' => Str::slug($name),

        ]);
        Author::create([
            'name' => $name = 'Dante Alighieri',
            'slug' => Str::slug($name),

        ]);
        Author::create([
            'name' => $name = 'Lev Tolstoy',
            'slug' => Str::slug($name),

        ]);
        Author::create([
            'name' => $name = 'Fyodor Dostoevsky',
            'slug' => Str::slug($name),

        ]);
        Author::create([
            'name' => $name = 'Dante Alighieri',
            'slug' => Str::slug($name),

        ]);
        Author::create([
            'name' => $name = 'Lev Tolstoy',
            'slug' => Str::slug($name),

        ]);
        Author::create([
            'name' => $name = 'Fyodor Dostoevsky',
            'slug' => Str::slug($name),

        ]);
        Author::create([
            'name' => $name = 'Dante Alighieri',
            'slug' => Str::slug($name),

        ]);
    }
}
