<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2022-11-27 11:46:47',
            ),
            1 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2022-11-27 11:46:47',
            ),
            2 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2022-11-27 11:46:47',
            ),
            3 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2022-11-27 11:46:47',
            ),
            4 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2022-11-27 11:46:47',
            ),
            5 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            6 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            7 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            8 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            9 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            10 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            11 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            12 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            13 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            14 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            15 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            16 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            17 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            18 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            19 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            20 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            21 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            22 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            23 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            24 => 
            array (
                'created_at' => '2022-11-27 11:46:47',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-11-27 11:46:47',
            ),
            25 => 
            array (
                'created_at' => '2022-11-27 11:50:27',
                'id' => 26,
                'key' => 'browse_seances',
                'table_name' => 'seances',
                'updated_at' => '2022-11-27 11:50:27',
            ),
            26 => 
            array (
                'created_at' => '2022-11-27 11:50:27',
                'id' => 27,
                'key' => 'read_seances',
                'table_name' => 'seances',
                'updated_at' => '2022-11-27 11:50:27',
            ),
            27 => 
            array (
                'created_at' => '2022-11-27 11:50:27',
                'id' => 28,
                'key' => 'edit_seances',
                'table_name' => 'seances',
                'updated_at' => '2022-11-27 11:50:27',
            ),
            28 => 
            array (
                'created_at' => '2022-11-27 11:50:27',
                'id' => 29,
                'key' => 'add_seances',
                'table_name' => 'seances',
                'updated_at' => '2022-11-27 11:50:27',
            ),
            29 => 
            array (
                'created_at' => '2022-11-27 11:50:27',
                'id' => 30,
                'key' => 'delete_seances',
                'table_name' => 'seances',
                'updated_at' => '2022-11-27 11:50:27',
            ),
            30 => 
            array (
                'created_at' => '2022-11-27 11:50:58',
                'id' => 31,
                'key' => 'browse_tickets',
                'table_name' => 'tickets',
                'updated_at' => '2022-11-27 11:50:58',
            ),
            31 => 
            array (
                'created_at' => '2022-11-27 11:50:58',
                'id' => 32,
                'key' => 'read_tickets',
                'table_name' => 'tickets',
                'updated_at' => '2022-11-27 11:50:58',
            ),
            32 => 
            array (
                'created_at' => '2022-11-27 11:50:58',
                'id' => 33,
                'key' => 'edit_tickets',
                'table_name' => 'tickets',
                'updated_at' => '2022-11-27 11:50:58',
            ),
            33 => 
            array (
                'created_at' => '2022-11-27 11:50:58',
                'id' => 34,
                'key' => 'add_tickets',
                'table_name' => 'tickets',
                'updated_at' => '2022-11-27 11:50:58',
            ),
            34 => 
            array (
                'created_at' => '2022-11-27 11:50:58',
                'id' => 35,
                'key' => 'delete_tickets',
                'table_name' => 'tickets',
                'updated_at' => '2022-11-27 11:50:58',
            ),
        ));
        
        
    }
}