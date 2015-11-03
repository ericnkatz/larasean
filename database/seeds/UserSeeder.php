<?php

use Illuminate\Database\Seeder;
use App/User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	'name' => 'Roar Doran',
    		'email' => 'example@roar.com',
    		'password' => bcrypt('password')
        ];

        User::create($user);
    }
}
