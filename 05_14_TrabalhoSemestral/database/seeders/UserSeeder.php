<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'       => Str::random(20),
            'birth'      => '2001-06-14',
            'address_id' => 14,
            'gender'     => rand(1, 3),
            'cpf'        => rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
            'email'      => Str::random(10).'@gmail.com',
            'password'   => Hash::make('Eu@123')
        ]);
    }
}
