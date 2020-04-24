<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'Oved', 
				'last_name' => 'FiSo', 
				'email' 	=> 'ovedfs@gmail.com', 
				'user' 		=> 'ovedfs',
                'remember_token' => Str::random(10),
                'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'San Cosme 290, Cuauhtemoc, D.F.',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Adela', 
				'last_name' => 'Flores', 
				'email' 	=> 'adela@gmail.com', 
				'user' 		=> 'adela',
                'remember_token' => Str::random(10),
                'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Tonala 321, Jalisco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
