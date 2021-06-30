<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Eduardo',
                'birth' => '2001-06-09',
                'address_id' => 9,
                'gender' => 0,
                'cpf' => '07672522922',
                'email' => 'dudufbastos1@gmail.com',
                'password' => 'Eu@123',
                'created_at' => '2021-05-27 00:32:34',
                'updated_at' => '2021-05-27 00:32:34',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'João de freitas',
                'birth' => '2021-06-14',
                'address_id' => 14,
                'gender' => 0,
                'cpf' => '2222222222',
                'email' => 'teste@teste.com.br',
                'password' => '$2y$10$CCOSx4C49v0dtdtFntGuouENA.rtAb9/z',
                'created_at' => '2021-06-11 23:37:34',
                'updated_at' => '2021-06-11 23:37:34',
            ),
        ));
        
        
    }
}