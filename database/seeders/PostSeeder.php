<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            Post::create([
                'title' => $faker->sentence(5),
                'posted_date' => $faker->date(),
                'author' => $faker->name(),
                'content' => $faker->paragraph(4),
            ]);
        }
    }
}
