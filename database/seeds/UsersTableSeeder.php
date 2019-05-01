<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'              => 'Admin',
                'email'             => 'admin@gmail.com',
                'password'          => bcrypt('12345678'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id'           => 1,
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Company 01',
                'email'             => 'company_01@gmail.com',
                'password'          => bcrypt('12345678'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id'           => 2,
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Company 02',
                'email'             => 'company_02@gmail.com',
                'password'          => bcrypt('12345678'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id'           => 2,
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Supplier 01',
                'email'             => 'supllier_01@gmail.com',
                'password'          => bcrypt('12345678'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id'           => 3,
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Supplier 02',
                'email'             => 'supllier_02@gmail.com',
                'password'          => bcrypt('12345678'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id'           => 3,
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Supplier 03',
                'email'             => 'supllier_03@gmail.com',
                'password'          => bcrypt('12345678'),
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id'           => 3,
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ]
        ]);
    }
}
