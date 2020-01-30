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
    		'email' => 'ayush.likhar@neosofttech.com',
    		'password' => Hash::make('password')
    	]);
        
        factory(App\User::class, 49)->create();
    }
}
