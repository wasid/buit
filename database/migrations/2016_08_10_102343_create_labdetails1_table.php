<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabdetails1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labdetails1', function(Blueprint $table)
		{
			$table->string('lab_name', 50)->default('')->primary();
			$table->date('update_date')->default('0000-00-00');
			$table->integer('total_pc')->default(0);
			$table->string('ip_range', 50)->default('0');
			$table->string('printer_model', 100)->default('');
			$table->integer('total_ups')->default(0);
			$table->text('software', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('labdetails1');
	}

}
