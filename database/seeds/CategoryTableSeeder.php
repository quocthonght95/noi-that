<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            0 => [
                'name' => 'Bàn ghế',
                'slug' => str_slug('ban-ghe'),
            ],
            1 => [
                'name' => 'Sofa',
                'slug' => str_slug('so-fa'),
            ]
        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
