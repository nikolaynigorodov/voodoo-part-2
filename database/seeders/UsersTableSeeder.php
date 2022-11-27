<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2022-11-27 11:49:12',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Admin',
                'password' => '$2y$10$U4zhjYgJIcWK76FoFN6EVei7z1Uz6EBLNp3C2FN21z59rW5VSp/tW',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2022-11-27 11:49:12',
            ),
        ));
        
        
    }
}