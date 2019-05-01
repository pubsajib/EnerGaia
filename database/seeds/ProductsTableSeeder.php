<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            	'name' 			=> 'product 01', 
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'name' 			=> 'product 02', 
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'name' 			=> 'product 03', 
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'name' 			=> 'product 04', 
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
            	'name' 			=> 'product 05', 
            	'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ]
        ]);
    }
}
