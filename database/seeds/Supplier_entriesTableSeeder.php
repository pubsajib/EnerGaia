<?php

use Illuminate\Database\Seeder;

class Supplier_entriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_entries')->insert([
            [
            	'user_id' 		=> rand(4,6), 
            	'product_id' 	=> rand(1,5),
            	'product_count'	=> rand(1,20),
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'user_id' 		=> rand(4,6), 
            	'product_id' 	=> rand(1,5),
            	'product_count'	=> rand(1,20),
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'user_id' 		=> rand(4,6), 
            	'product_id' 	=> rand(1,5),
            	'product_count'	=> rand(1,20),
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'user_id' 		=> rand(4,6), 
            	'product_id' 	=> rand(1,5),
            	'product_count'	=> rand(1,20),
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'user_id' 		=> rand(4,6), 
            	'product_id' 	=> rand(1,5),
            	'product_count'	=> rand(1,20),
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ]
        ]);
    }
}
