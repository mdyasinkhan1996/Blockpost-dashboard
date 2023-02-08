<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Post,Image};

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Computer',
            'description' => 'Computer is a best device in our programing',
            'status' => 1,
            'slug' => 'jP3FtCsh',
            'date' => date('Y-m-d'),
        ]);
        $post->tags()->attach(1);

        $postImg = new Image();
        $postImg->url = 'public/assets/images/No image';  
        $post->image()->save($postImg); 
    }
}
