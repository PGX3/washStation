<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run(): void
{
    \App\Models\Wash::insert([
        [
            'company_id' => 1,
            'schedule_at' => now()->format('Y-m-d') . ' 08:00:00',
            'customer_name' => 'Pedro Lima',
            'wash_type_id' => 1,
            'price' => 30.00,
            'employee_id' => 1,
            'status' => 'completo',
        ],
        [
            'company_id' => 1,
            'schedule_at' => now()->format('Y-m-d') . ' 09:00:00',
            'customer_name' => 'Ana Costa',
            'wash_type_id' => 2,
            'price' => 50.00,
            'employee_id' => 2,
            'status' => 'completo',
        ],
        [
            'company_id' => 1,
            'schedule_at' => now()->format('Y-m-d') . ' 10:00:00',
            'customer_name' => 'Lucas Almeida',
            'wash_type_id' => 3,
            'price' => 80.00,
            'employee_id' => 1,
            'status' => 'pendente',
        ],
    ]);
}


}
