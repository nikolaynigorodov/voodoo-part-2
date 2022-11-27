<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2022-11-27 11:46:47',
            ),
        ));
        
        
    }
}