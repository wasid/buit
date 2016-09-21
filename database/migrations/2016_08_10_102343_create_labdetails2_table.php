<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabdetails2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labdetails2', function(Blueprint $table)
		{
			$table->string('lab_name', 20)->default('');
			$table->date('update_date')->default('0000-00-00');
			$table->integer('sl')->default(0);
			$table->string('pc_code', 5)->default('');
			$table->string('pc_name', 50)->default('');
			$table->string('pc_ip', 15)->default('');
			$table->string('mac1', 17)->default('');
			$table->string('assetno', 18)->default('');
			$table->string('username', 30)->default('');
			$table->string('email', 25)->default('');
			$table->string('warning', 10)->default('');
			$table->string('ipblock', 10)->default('');
			$table->string('ipunblock', 10)->default('');
			$table->string('pc_type', 50)->default('');
			$table->string('processor', 20)->default('');
			$table->string('motherboard', 25)->default('');
			$table->string('ram', 10)->default('');
			$table->string('hdd', 20)->default('');
			$table->string('location', 15)->default('');
			$table->string('department', 10)->default('');
			$table->string('entrydate', 15)->default('');
			$table->text('comment', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('labdetails2');
	}

}
