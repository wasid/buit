<?php

use Illuminate\Database\Seeder;
use database\seeds\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

		$this->call('UsersTableSeeder');
    }
}
