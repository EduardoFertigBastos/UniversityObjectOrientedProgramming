<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddressSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CoinSeeder::class);
        $this->call(PurchaseSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(UserSeeder::class);
    }
}
