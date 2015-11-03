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
        	'name' => 'Sean Doran',
    		'email' => 'example@sean.com',
    		'password' => 'password'
        ];

        User::create($user);
    }
}
