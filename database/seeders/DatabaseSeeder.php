<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use App\Models\Image;
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
        // Features::factory()->create(["image" => "images/poor-dad-rich-dad.jpg"]);
        // Features::factory()->create(["image" => "images/2657.jpg"]);
        // Features::factory()->create(["image" => "images/9717.jpg"]);
        // Features::factory()->create(["image" => "images/63697.jpg"]);
        // Features::factory()->create(["image" => "images/128029.jpg"]);
        // Features::factory()->create(["image" => "images/10073506.jpg"]);

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
        //Users :
        User::factory()->create([
            'username' => 'Abderrahmene',
            'email' => 'abdouhnd31@gmail.com',
            'is_admin' => 1,
        ]);
        User::factory()->create([
            'username' => 'Youcef',
            'email_verified_at' => Carbon::now(),
            'is_admin' => 0,
        ]);
        User::factory()->create([
            'username' => 'Amine',
            'is_admin' => 0,
        ]);
        User::factory(7)->create([
            'is_admin' => 0,
        ]);


        // //Roles :
        // Role::create([
        //     'name' => 'Administator'
        // ]);
        // Role::create([
        //     'name' => 'Manager'
        // ]);
        // Role::create([
        //     'name' => 'Client'
        // ]);


        //categories:
        //Category::factory(10)->create();

        //authors:
        //Author::factory(10)->create();

        //books:
        //Book::factory(10)->create();

        // Category::first()->image()->create([
        //     'url'=>'chaklaaCategory.png'
        // ]);



        // Categories :
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


        //variantes of each category :
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
        Category::find(1)->image()->create([
            'url' => '3M4sfNwHJwdYkQkr6ba4sPs0MoDSWPHGmq7qEDNx.jpg'
        ]);
        Category::find(2)->image()->create([
            'url' => '2Dt0Exhjk9bty6T1Npqska0kvpACOWSFQUVpiwwa.jpg'
        ]);
        Category::find(3)->image()->create([
            'url' => '.jpg'
        ]);
        Category::find(4)->image()->create([
            'url' => '.jpg'
        ]);
        Category::find(5)->image()->create([
            'url' => '.jpg0'
        ]);
        Category::find(6)->image()->create([
            'url' => '.jpg'
        ]);
        Category::find(7)->image()->create([
            'url' => '.jpg'
        ]);
        Category::find(8)->image()->create([
            'url' => '.jpg'
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


        Author::find(1)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0234502/?ref_=nmls_pst'
        ]);
        Author::find(2)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0019604/?ref_=nmls_pst'
        ]);
        Author::find(3)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0866243/?ref_=nmls_pst'
        ]);
        Author::find(4)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0401076/?ref_=nmls_pst'
        ]);
        Author::find(5)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0000636/?ref_=nmls_pst'
        ]);
        Author::find(6)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0324473/?ref_=nmls_pst'
        ]);
        Author::find(7)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0148859/?ref_=nmls_pst'
        ]);
        Author::find(8)->image()->create([
            'url' => 'https://www.imdb.com/name/nm0130902/?ref_=nmls_pst'
        ]);
    }
}


// Product::create([
//     'name' => 'iPhone',
//     'body' => 'Apples iconic smartphone, known for its sleek design, powerful performance, and cutting-edge features.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Coca-Cola',
//     'body' => 'The worlds most popular carbonated beverage, Coca-Cola is a refreshing soft drink with a secret formula dating back to 1886.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Ford Mustang',
//     'body' => ' An American classic, the Ford Mustang is a legendary muscle car with a distinctive design and powerful performance.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'PlayStation 5',
//     'body' => 'Sonys latest gaming console, the PlayStation 5, delivers high-quality graphics and an immersive gaming experience.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Nike Air Max',
//     'body' => 'Description: A line of stylish athletic shoes known for their comfortable cushioning and iconic visible air pocket in the sole.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'LEGO Bricks',
//     'body' => 'Interlocking plastic bricks that have become a global phenomenon, allowing users to build endless creations.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Amazon Kindle',
//     'body' => 'A series of e-readers designed for avid readers, providing a convenient way to carry and access a vast library of books.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Starbucks Coffee',
//     'body' => ' Starbucks is a globally recognized coffeehouse chain, offering a variety of coffee beverages and snacks in a cozy atmosphere.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Rolex Submariner',
//     'body' => 'A highly coveted luxury dive watch known for its timeless design, precision, and durability.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Adidas Superstar',
//     'body' => 'Classic sneakers from Adidas, the Superstar model is celebrated for its shell toe and distinctive three-stripe design.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Tesla Model 3',
//     'body' => 'An electric car by Tesla, the Model 3 is known for its long-range capabilities, sleek design, and advanced autopilot features.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Nintendo Switch',
//     'body' => 'A versatile gaming console that can be used both as a home console and a portable device, offering a wide range of games',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Chanel No.5',
//     'body' => ' A timeless fragrance from Chanel, No. 5 is one of the most iconic and best-selling perfumes in the world.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Sony Walkman',
//     'body' => 'The revolutionary portable cassette player that transformed the way people listen to music, introducing the concept of personal audio.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Google Search',
//     'body' => 'The worlds most widely used search engine, Google Search provides users with access to a vast amount of information on the internet.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Dyson V10 Vacuum Cleaner',
//     'body' => 'A high-performance cordless vacuum cleaner known for its powerful suction, innovative design, and versatility.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Porsche 911',
//     'body' => 'An iconic sports car, the Porsche 911 is celebrated for its distinctive design, speed, and precision engineering.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'GoPro Hero',
//     'body' => 'A popular action camera designed for capturing adventurous moments in high-quality video and photos.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Louis Vuitton Neverfull Bag',
//     'body' => 'A timeless luxury handbag from Louis Vuitton, the Neverfull is recognized for its spacious design and iconic monogram pattern.',
//     'url' => 'https://picsum.photos/200'
// ]);
// Product::create([
//     'name' => 'Portable Espresso Maker',
//     'body' => 'Enjoy freshly brewed espresso anywhere with this compact and portable espresso maker. No need for electricity – just add hot water and your favorite coffee grounds.',
//     'url' => 'https://picsum.photos/200'
// ]);
