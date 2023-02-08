<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['laptop', 'computer', 'mobile'];
        foreach($categories as $category){
            Categorie::create([
                'name'=> $category,
                'status'=> 0,
                'month'=> date('Y-m'),
            ]);
        }
    }
}
