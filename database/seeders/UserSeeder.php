<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admins
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Admin $i",
                'email' => "admin$i@marketflow.com",
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ]);
        }

        // Vendors
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Vendor $i",
                'email' => "vendor$i@marketflow.com",
                'password' => Hash::make('123456'),
                'role' => 'vendor',
            ]);
        }

        // Customers
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Customer $i",
                'email' => "customer$i@marketflow.com",
                'password' => Hash::make('123456'),
                'role' => 'customer',
            ]);
        }
    }
}