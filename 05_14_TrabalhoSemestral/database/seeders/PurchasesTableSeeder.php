<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('purchases')->delete();
        
        \DB::table('purchases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'coin_id' => 2,
                'amount' => '10.00',
                'price' => '5.00',
                'created_at' => '2021-05-22 00:01:41',
                'updated_at' => '2021-05-22 00:01:41',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'coin_id' => 2,
                'amount' => '51.00',
                'price' => '85.00',
                'created_at' => '2021-05-22 00:04:45',
                'updated_at' => '2021-05-22 00:19:01',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'coin_id' => 3,
                'amount' => '15.00',
                'price' => '27.00',
                'created_at' => '2021-05-22 23:32:22',
                'updated_at' => '2021-05-22 23:32:22',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'coin_id' => 6,
                'amount' => '120.00',
                'price' => '100.00',
                'created_at' => '2021-06-11 23:41:10',
                'updated_at' => '2021-06-11 23:41:10',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'coin_id' => 1,
                'amount' => '373.00',
                'price' => '863.00',
                'created_at' => '2021-06-29 01:17:09',
                'updated_at' => '2021-06-29 01:17:09',
            ),
            5 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'coin_id' => 2,
                'amount' => '276.00',
                'price' => '593.00',
                'created_at' => '2021-06-29 01:38:41',
                'updated_at' => '2021-06-29 01:38:41',
            ),
            6 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'coin_id' => 1,
                'amount' => '319.00',
                'price' => '214.00',
                'created_at' => '2021-06-29 01:38:53',
                'updated_at' => '2021-06-29 01:38:53',
            ),
        ));
        
        
    }
}