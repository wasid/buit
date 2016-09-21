<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountpcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countpc', function(Blueprint $table)
		{
			$table->string('cpuid', 5)->default('')->primary();
			$table->string('cpuname', 10)->default('');
			$table->string('ip1', 15)->default('');
			$table->string('mac1', 17)->default('');
			$table->string('assetno', 18)->default('');
			$table->string('username', 30)->default('');
			$table->string('designation', 10)->default('');
			$table->string('dept', 10)->default('');
			$table->string('ip2', 15)->default('');
			$table->string('mac2', 17)->default('');
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->string('comments', 50)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countpc');
	}

}
