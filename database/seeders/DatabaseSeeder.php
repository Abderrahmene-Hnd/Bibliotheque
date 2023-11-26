<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Features;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Features::factory()->create(["image"=>"images/poor-dad-rich-dad.jpg"]);
        Features::factory()->create(["image"=>"images/2657.jpg"]);
        Features::factory()->create(["image"=>"images/9717.jpg"]);
        Features::factory()->create(["image"=>"images/63697.jpg"]);
        Features::factory()->create(["image"=>"images/128029.jpg"]);
        Features::factory()->create(["image"=>"images/10073506.jpg"]);
    }
}
