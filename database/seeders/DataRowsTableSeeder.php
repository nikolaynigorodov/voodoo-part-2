<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 1,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            1 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 2,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            2 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Email',
                'edit' => 1,
                'field' => 'email',
                'id' => 3,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            3 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Password',
                'edit' => 1,
                'field' => 'password',
                'id' => 4,
                'order' => 4,
                'read' => 0,
                'required' => 1,
                'type' => 'password',
            ),
            4 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Remember Token',
                'edit' => 0,
                'field' => 'remember_token',
                'id' => 5,
                'order' => 5,
                'read' => 0,
                'required' => 0,
                'type' => 'text',
            ),
            5 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 6,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            6 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 7,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            7 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Avatar',
                'edit' => 1,
                'field' => 'avatar',
                'id' => 8,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'image',
            ),
            8 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}',
                'display_name' => 'Role',
                'edit' => 1,
                'field' => 'user_belongsto_role_relationship',
                'id' => 9,
                'order' => 10,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            9 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'display_name' => 'Roles',
                'edit' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'id' => 10,
                'order' => 11,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            10 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Settings',
                'edit' => 0,
                'field' => 'settings',
                'id' => 11,
                'order' => 12,
                'read' => 0,
                'required' => 0,
                'type' => 'hidden',
            ),
            11 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 12,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            12 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 2,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 13,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            13 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 14,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            14 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 15,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            15 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 16,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            16 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 17,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            17 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 18,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            18 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 19,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            19 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Display Name',
                'edit' => 1,
                'field' => 'display_name',
                'id' => 20,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            20 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Role',
                'edit' => 1,
                'field' => 'role_id',
                'id' => 21,
                'order' => 9,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            21 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 22,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            22 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 23,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            23 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Date Start',
                'edit' => 1,
                'field' => 'date_start',
                'id' => 24,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'date',
            ),
            24 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Time Start',
                'edit' => 1,
                'field' => 'time_start',
                'id' => 25,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'time',
            ),
            25 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Ticket Busy',
                'edit' => 0,
                'field' => 'ticket_busy',
                'id' => 26,
                'order' => 5,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            26 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Ticket Free',
                'edit' => 0,
                'field' => 'ticket_free',
                'id' => 27,
                'order' => 6,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            27 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 28,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            28 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 29,
                'order' => 8,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            29 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 30,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            30 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Seance Id',
                'edit' => 1,
                'field' => 'seance_id',
                'id' => 31,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            31 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Ticket',
                'edit' => 1,
                'field' => 'ticket',
                'id' => 32,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            32 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 1,
                'field' => 'created_at',
                'id' => 33,
                'order' => 5,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            33 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 34,
                'order' => 6,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            34 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{"model":"App\\\\Models\\\\Seance","table":"seances","type":"belongsTo","column":"seance_id","key":"id","label":"name","pivot_table":"data_rows","pivot":"0","taggable":"0"}',
                'display_name' => 'Seance Name',
                'edit' => 1,
                'field' => 'ticket_belongsto_seance_relationship',
                'id' => 35,
                'order' => 2,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
        ));
        
        
    }
}