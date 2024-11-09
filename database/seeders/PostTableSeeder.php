<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Laravel 8 Released',
                'post_text' => 'Laravel 8 has been released. This version of Laravel includes many new features and improvements.',
                'category_id' => 1,
            ],
            [
                'title' => 'Vue.js 3 Released',
                'post_text' => 'Vue.js 3 has been released. This version of Vue.js includes many new features and improvements.',
                'category_id' => 2,
            ],
            [
                'title' => 'React.js 17 Released',
                'post_text' => 'React.js 17 has been released. This version of React.js includes many new features and improvements.',
                'category_id' => 3,
            ],
            [
                'title' => 'Node.js 14 Released',
                'post_text' => 'Node.js 14 has been released. This version of Node.js includes many new features and improvements.',
                'category_id' => 4,
            ],
            [
                'title' => 'Django 3.1 Released',
                'post_text' => 'Django 3.1 has been released. This version of Django includes many new features and improvements.',
                'category_id' => 5,
            ],
            [
                'title' => 'Flask 1.1 Released',
                'post_text' => 'Flask 1.1 has been released. This version of Flask includes many new features and improvements.',
                'category_id' => 6,
            ],
            [
                'title' => 'Express.js 4.17 Released',
                'post_text' => 'Express.js 4.17 has been released. This version of Express.js includes many new features and improvements.',
                'category_id' => 7,
            ],
            [
                'title' => 'Spring Boot 2.3 Released',
                'post_text' => 'Spring Boot 2.3 has been released. This version of Spring Boot includes many new features and improvements.',
                'category_id' => 8,
            ],
            [
                'title' => 'Ruby on Rails 6.0 Released',
                'post_text' => 'Ruby on Rails 6.0 has been released. This version of Ruby on Rails includes many new features and improvements.',
                'category_id' => 9,
            ],
            [
                'title' => 'ASP.NET Core 5.0 Released',
                'post_text' => 'ASP.NET Core 5.0 has been released. This version of ASP.NET Core includes many new features and improvements.',
                'category_id' => 10,
            ],
        ]);
    }
}
