<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Laravel'],
            ['name' => 'Vue.js'],
            ['name' => 'React.js'],
            ['name' => 'Node.js'],
            ['name' => 'Django'],
            ['name' => 'Flask'],
            ['name' => 'Express.js'],
            ['name' => 'Spring Boot'],
            ['name' => 'Ruby on Rails'],
            ['name' => 'ASP.NET'],
        ]);
    }
}
