<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDailylabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dailylab', function(Blueprint $table)
		{
			$table->string('lab_name', 50)->default('');
			$table->dateTime('submit_date')->default('0000-00-00 00:00:00');
			$table->integer('total_pc')->default(0);
			$table->integer('out_of_order')->default(0);
			$table->string('printer_status', 100)->default('');
			$table->string('comment')->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dailylab');
	}

}
