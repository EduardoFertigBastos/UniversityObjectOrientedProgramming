<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('states')->delete();

        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Santa Catarina',
                'initials' => 'SC',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Paraná',
                'initials' => 'PR',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Rio Grande do Sul',
                'initials' => 'RS',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'São Paulo',
                'initials' => 'SP',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Rio de Janeiro',
                'initials' => 'RS',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Goiás',
                'initials' => 'GO',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Alagoas',
                'initials' => 'AL',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Minas Gerais',
                'initials' => 'MG',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Sergipe',
                'initials' => 'SE',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Amazonas',
                'initials' => 'AM',
            ),
        ));


    }
}
