<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Employee::insert([
            [
                'company_id' => 1,
                'name' => 'João Silva',
                'phone' => '(51) 99999-1111',
                'payment_type' => 'commission', // igual à migration
                'commission_percentage' => 40.00, // corrigido
                'fixed_amount_per_wash' => 0.00,
                'monthly_salary' => 0.00,
            ],
            [
                'company_id' => 1,
                'name' => 'Maria Santos',
                'phone' => '(51) 99999-2222',
                'payment_type' => 'commission',
                'commission_percentage' => 0.00,
                'fixed_amount_per_wash' => 20.00,
                'monthly_salary' => 0.00,
            ],
            [
                'company_id' => 1,
                'name' => 'Carlos Souza',
                'phone' => '(51) 99999-3333',
                'payment_type' => 'fixed_salary',
                'commission_percentage' => 0.00,
                'fixed_amount_per_wash' => 0.00,
                'monthly_salary' => 2500.00,
            ],
        ]);
    }
}
