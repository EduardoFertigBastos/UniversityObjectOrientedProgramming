<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('addresses')->delete();

        \DB::table('addresses')->insert(array (
            0 =>
            array (
                'id' => 3,
                'cep' => '81521510',
                'description' => 'Rua das palmeiras',
                'numberHouse' => 11,
                'neighborhood' => 'societário',
                'complement' => 'apto70',
                'city_id' => 6,
                'created_at' => '2021-05-26 00:11:50',
                'updated_at' => '2021-06-11 23:34:31',
            ),
            1 =>
            array (
                'id' => 14,
                'cep' => '89182000',
                'description' => 'Rua das palmeiras',
                'numberHouse' => 4516,
                'neighborhood' => 'Centro',
                'complement' => 'apto 4',
                'city_id' => 9,
                'created_at' => '2021-06-11 23:37:34',
                'updated_at' => '2021-06-11 23:37:34',
            ),
            2 =>
            array (
                'id' => 5,
                'cep' => '81521510',
                'description' => 'aaaaa',
                'numberHouse' => 11,
                'neighborhood' => 'aaaaaaa',
                'complement' => 'aaaaa',
                'city_id' => 3,
                'created_at' => '2021-05-26 00:15:18',
                'updated_at' => '2021-05-26 00:15:18',
            ),
            3 =>
            array (
                'id' => 15,
                'cep' => '55620705',
                'description' => 'h3fiGYqg2LVMdT2PsQjy',
                'numberHouse' => 441,
                'neighborhood' => 'CZJavAai1LixlDeSypJp',
                'complement' => 'sSMjFiv4vzipQQXeUGg8',
                'city_id' => 6,
                'created_at' => '2021-06-29 01:36:01',
                'updated_at' => '2021-06-29 01:36:01',
            ),
            4 =>
            array (
                'id' => 7,
                'cep' => '11233321',
                'description' => 'aaaaaaa',
                'numberHouse' => 1133,
                'neighborhood' => 'Bairro',
                'complement' => 'Complemento',
                'city_id' => 5,
                'created_at' => '2021-05-26 00:30:25',
                'updated_at' => '2021-05-26 00:30:25',
            ),
            5 =>
            array (
                'id' => 9,
                'cep' => '89160027',
                'description' => 'Descricao',
                'numberHouse' => 1331,
                'neighborhood' => 'Bairro',
                'complement' => 'aaaaaaaa',
                'city_id' => 5,
                'created_at' => '2021-05-27 00:32:34',
                'updated_at' => '2021-05-27 00:32:34',
            ),
            6 =>
            array (
                'id' => 13,
                'cep' => '89182000',
                'description' => 'Rua teste de silva',
                'numberHouse' => 4521,
                'neighborhood' => 'Centro',
                'complement' => 'Teste',
                'city_id' => 9,
                'created_at' => '2021-06-11 23:33:54',
                'updated_at' => '2021-06-11 23:33:54',
            ),
            7 =>
            array (
                'id' => 16,
                'cep' => '12639519',
                'description' => 'Q9k4l07nFqSQWkZJs5SZ',
                'numberHouse' => 651,
                'neighborhood' => 'tG7ZkBMWfN0ASsQUEiVo',
                'complement' => 'VhwXgYwi4Y8naf208sia',
                'city_id' => 6,
                'created_at' => '2021-06-29 01:37:31',
                'updated_at' => '2021-06-29 01:37:31',
            ),
            8 =>
            array (
                'id' => 17,
                'cep' => '17188751',
                'description' => 'Ae6h6nGoGZoeEEfN5X0B',
                'numberHouse' => 435,
                'neighborhood' => '3oJINKgLednrXPH6NR20',
                'complement' => 'ccKQjPWegBr3fMet9NgF',
                'city_id' => 6,
                'created_at' => '2021-06-29 01:38:41',
                'updated_at' => '2021-06-29 01:38:41',
            ),
            9 =>
            array (
                'id' => 18,
                'cep' => '30391162',
                'description' => 'T7qexo4wkPhDfUtnneZO',
                'numberHouse' => 540,
                'neighborhood' => '65Sl3F2WmkWvpbYLHQFx',
                'complement' => 'I6QpL7cSG2ZtAtPek8gT',
                'city_id' => 6,
                'created_at' => '2021-06-29 01:38:53',
                'updated_at' => '2021-06-29 01:38:53',
            ),
        ));


    }
}
