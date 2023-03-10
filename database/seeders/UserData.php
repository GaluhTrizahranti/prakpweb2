<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'name' => 'galuh',
            'password' => bcrypt(123456),
            'email' => 'galuh@gmail.com'
            ],

            [
            'name' => 'owner',
            'password' => bcrypt(123456),
            'email' => 'owner@gmail.com'
            ],
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }        
}
