<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeered extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['back end developer', 'front end developer', 'android developer'];
        foreach($tags as $tag){
            Tag::create([
                'name' => $tag,
                'month' => date('Y-m'),
            ]);
        }
    }
}
