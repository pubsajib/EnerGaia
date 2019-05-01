<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'display_name' => 'Administrator', 'description' => 'Administrator'],
            ['name' => 'company', 'display_name' => 'Company', 'description' => 'Company'],
            ['name' => 'supplier', 'display_name' => 'Supplier', 'description' => 'Supplier'],
        ]);
    }
}
