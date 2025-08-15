<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run(): void
{
    \App\Models\Company::create([
        'name' => 'Wash Station',
        'cnpj' => '00.000.000/0001-00',
        'phone' => '(51) 99999-0000',
        'email' => 'contato@washstation.com',
        'address' => 'Av. Principal, 123 - Charqueadas, RS',
    ]);
}

}
