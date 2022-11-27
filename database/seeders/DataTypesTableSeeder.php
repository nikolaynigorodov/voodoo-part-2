<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2022-11-27 11:46:47',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2022-11-27 11:46:47',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2022-11-27 11:46:47',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            3 => 
            array (
                'controller' => NULL,
                'created_at' => '2022-11-27 11:50:27',
                'description' => NULL,
                'details' => '{"order_column":"date_start","order_display_column":"date_start","order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Seances',
                'display_name_singular' => 'Seance',
                'generate_permissions' => 1,
                'icon' => 'voyager-archive',
                'id' => 4,
                'model_name' => 'App\\Models\\Seance',
                'name' => 'seances',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'seances',
                'updated_at' => '2022-11-27 13:22:47',
            ),
            4 => 
            array (
                'controller' => NULL,
                'created_at' => '2022-11-27 11:50:58',
                'description' => NULL,
                'details' => '{"order_column":"seance_id","order_display_column":"seance_id","order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Tickets',
                'display_name_singular' => 'Ticket',
                'generate_permissions' => 1,
                'icon' => 'voyager-ticket',
                'id' => 5,
                'model_name' => 'App\\Models\\Ticket',
                'name' => 'tickets',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'tickets',
                'updated_at' => '2022-11-27 11:54:31',
            ),
        ));
        
        
    }
}