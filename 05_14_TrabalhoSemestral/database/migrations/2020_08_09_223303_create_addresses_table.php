<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAddressesTable.
 */
class CreateAddressesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->id();
			$table->char('cep', 8);
			$table->string('description');
			$table->integer('numberHouse');
			$table->string('neighborhood');
			$table->string('complement');
			$table->unsignedInteger('city_id');

            $table->timestamps();

			$table->foreign('city_id')->references('id')->on('cities');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}
}
