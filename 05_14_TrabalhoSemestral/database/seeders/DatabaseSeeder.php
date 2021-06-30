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
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(CoinsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
    }
}
