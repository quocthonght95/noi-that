<?php

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = [
            0 => [
                'payment_name' => 'NV Bưu điện thu tiền khi giao hàng',
            ],
            1 => [
                'payment_name' => 'Thẻ ATM có Internet Banking',
            ]
        ];

        foreach ($payments as $payment) {
            DB::table('payments')->insert($payment);
        }
    }
}
