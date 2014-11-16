<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('brand');
            $table->string('description');
            $table->float('capacity');
            $table->float('kcal');
            $table->float('protein');
            $table->float('fat');
            $table->float('saturated_fat');
            $table->float('carb');
            $table->float('sugar');            
            $table->float('fibre');
            $table->float('price');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
