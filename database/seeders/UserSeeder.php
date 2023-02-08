<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
                [
                    'name'=> 'Md Yasin Khan',
                    'email'=> 'yasin@gmail.com',
                    'password'=> Hash::make(123456),
                    'is_admin'=> 1,
                    'month'=> date('Y-m'),
                ],
                [
                    'name'=> 'Md akash Khan',
                    'email'=> 'akash@gmail.com',
                    'password'=> Hash::make(123456),
                    'is_admin'=> 0,
                    'month'=> date('Y-m'),
                ],
                [
                    'name'=> 'Md Arif Khan',
                    'email'=> 'arif@gmail.com',
                    'password'=> Hash::make(123456),
                    'is_admin'=> 0,
                    'month'=> date('Y-m'),
                ],
                [
                    'name'=> 'Md Noyn Khan',
                    'email'=> 'noyn@gmail.com',
                    'password'=> Hash::make(123456),
                    'is_admin'=> 0,
                    'month'=> date('Y-m'),
                ],
                [
                    'name'=> 'Md Sojib Khan',
                    'email'=> 'sojib@gmail.com',
                    'password'=> Hash::make(123456),
                    'is_admin'=> 0
                ]
            ];
            foreach($datas as $data){
                User::create($data);
            }
    }
}
