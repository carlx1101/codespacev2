<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@itsolutionstuff.com',
               'type'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'tutor User',
               'email'=>'tutor@itsolutionstuff.com',
               'type'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'learner',
               'email'=>'learner@itsolutionstuff.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
