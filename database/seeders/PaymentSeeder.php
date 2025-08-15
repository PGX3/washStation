<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run(): void
{
    \App\Models\Payment::insert([
        [
            'company_id' => 1,
            'wash_id' => 1,
            'amount_paid' => 30.00,
            'payment_method' => 'Dinheiro',
        ],
        [
            'company_id' => 1,
            'wash_id' => 2,
            'amount_paid' => 50.00,
            'payment_method' => 'Cartao',
        ]
    ]);
}

}
