<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        for($i = 0; $i < 15; $i++) {
            $product = [
                'name' => $faker->name,
                'description' => $faker->text,
                'unit_price' => $faker->numberBetween($min = 500000,$max = 2000000),
                'discount' => rand(0, 30),
                'image' => '/photos/product.jpg',
                'note' => str_random(20),
                'size' => $faker->name,
                'guarantee' => $faker->name,
                'material' => $faker->name,
                'hot' =>'hot',
                'is_hidden' =>0,
                'category_id' => rand(1, 2),
            ];
            $product['slug'] = str_slug($product['name']);
            DB::table('products')->insert($product);
        }
    }
}
