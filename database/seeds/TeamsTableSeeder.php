<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PHP',
                'description' => NULL,
                'icon' => 'fab fa-php',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Python',
                'description' => NULL,
                'icon' => 'fab fa-python',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'JS',
                'description' => NULL,
                'icon' => 'fab fa-js',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'HTML5',
                'description' => NULL,
                'icon' => 'fab fa-html5',
            ),
        ));
        
        
    }
}