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
            $table->decimal('capacity',5,2);
            $table->decimal('kcal',5,2);
            $table->decimal('protein',2,2);
            $table->decimal('fat',2,2);
            $table->decimal('saturated_fat',2,2);
            $table->decimal('carb',2,2);
            $table->decimal('sugar',2,2);            
            $table->decimal('fibre',2,2);
            $table->decimal('price',5,2);
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
