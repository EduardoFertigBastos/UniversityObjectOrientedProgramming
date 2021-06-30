<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('cities')->delete();

        \DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Florianopolis',
                'state_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Curitiba',
                'state_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Porto Alegre',
                'state_id' => 3,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'São Paulo',
                'state_id' => 4,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Rio de Janeiro',
                'state_id' => 5,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Goiânia',
                'state_id' => 6,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Maceió',
                'state_id' => 7,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Belo Horizonte',
                'state_id' => 8,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Aracajaju',
                'state_id' => 9,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Manaus',
                'state_id' => 10,
            ),
        ));


    }
}
