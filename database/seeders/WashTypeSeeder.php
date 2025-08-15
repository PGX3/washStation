<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WashTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run(): void
{
    \App\Models\WashType::insert([
        ['company_id' => 1, 'name' => 'Simples', 'default_price' => 30.00],
        ['company_id' => 1, 'name' => 'Completa', 'default_price' => 50.00],
        ['company_id' => 1, 'name' => 'Detalhada', 'default_price' => 80.00],
    ]);
}

}
