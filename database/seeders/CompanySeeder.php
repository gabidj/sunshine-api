<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory(1)->create(['id'=> 1, 'name' => 'company1', 'is_premium' => 1]);
        Company::factory(1)->create(['id'=> 2, 'name' => 'company2', 'is_premium' => 0]);
    }
}
