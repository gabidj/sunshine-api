<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CompanySeeder::class]);

        $password = bcrypt('password');
        \App\Models\User::factory(10)->create(['password' => $password]);
        \App\Models\User::factory(1)->create(['email' => 'user1@dot.com', 'password' => $password, 'company_id' => 1]);
        \App\Models\User::factory(1)->create(['email' => 'user2@dot.com', 'password' => $password, 'company_id' => 2]);
        \App\Models\User::factory(1)->create(['email' => 'gabriel@superadmin.com', 'password' => $password]);
    }
}
