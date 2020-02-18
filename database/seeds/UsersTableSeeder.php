<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'Ayush Likhar',
            'team_id' => 1,
    		'email' => 'ayush.likhar@neosofttech.com',
    		'password' => Hash::make('password')
    	]);
        
        factory(App\User::class, 48)->create();
    }
}
