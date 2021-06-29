<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Purchase;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purchase::create([
            'user_id' => 1,
            'coin_id' => rand(1, 2),
            'amount'  => rand(1, 1000),
            'price'   => rand(1, 1000)
        ]);
    }
}
