<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
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
                'name' => 'Super heroes',
                'slug' => 'super-heroes',
                'description' => 'Lorem ipsum dolor sit amet 
                consectetur, adipisicing elit. At omnis dolorum tempora, 
                placeat accusamus fugit necessitatibus non cumque, voluptas
                commodi nesciunt quis amet, corporis tenetur eius fugiat iure 
                officia delectus?',
                'color' =>  '#440022',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
            ],
            [
                'name' => 'Geek',
                'slug' => 'geek',
                'description' => 'Lorem ipsum dolor sit amet 
                consectetur, adipisicing elit. At omnis dolorum tempora, 
                placeat accusamus fugit necessitatibus non cumque, voluptas
                commodi nesciunt quis amet, corporis tenetur eius fugiat iure 
                officia delectus?',
                'color' =>  '#445500',
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
            ]
        );

      
        Category::insert($data);
    }
}
