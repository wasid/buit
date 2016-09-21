<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailpassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mailpass', function(Blueprint $table)
		{
			$table->string('id', 20)->default('')->primary();
			$table->string('uid', 20)->default('');
			$table->string('pass', 20)->default('');
			$table->string('name', 100)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mailpass');
	}

}
