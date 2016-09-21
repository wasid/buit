<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder{

	public function run(){
	/*	User::create(array(
			'name' => 'wasid',
			'lto_name' => 'wasid name',
			'address' => 'wasid address',
			'contact' => '0167',
			'password' => '123456',
			));
			*/
	/* 	User::create(array(
			'name' => 'ocean',
			'lto_name' => 'null',
			'address' => 'BU',
			'contact' => '007',
			'password' => Hash::make('123456'),
			));

*/	
         		      $user = User::find(77);

                        $user->password = Hash::make('ss302@admin');

                        $user->save();

	}

}