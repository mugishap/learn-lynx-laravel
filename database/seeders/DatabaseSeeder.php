<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'firstName' => 'Learn Lynx',
            'lastName' => 'Admin',
            'email' => 'lynxadmin@gmail.com',
            'telephone' => '0792307144',
            'role' => 'admin',
            'status' => 'active',
            'password' => bcrypt('password', [
                'rounds' => 10,
            ]),
        ]);
    }
}
