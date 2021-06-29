<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'cep'         => rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
            'description' => Str::random(20),
            'numberHouse' => rand(1,1000),
            'neighborhood'=> Str::random(20),
            'city_id'     => 6,
            'complement'  => Str::random(20)
        ]);
    }
}
