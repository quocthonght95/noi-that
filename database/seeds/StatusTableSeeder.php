<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            0 => [
                'status_name' => 'Pending',
            ],
            1 => [
                'status_name' => 'Confirmed',
            ],
            2 => [
                'status_name' => 'Shipped',
            ],
            3 => [
                'status_name' => 'Cancelled',
            ]
        ];

        foreach ($status as $st) {
            DB::table('status')->insert($st);
        }    }
}
