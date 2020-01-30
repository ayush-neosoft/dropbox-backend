<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Files',
                'description' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tasks',
                'description' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Snippets',
                'description' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Network',
                'description' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Chat',
                'description' => NULL,
            ),
        ));
        
        
    }
}