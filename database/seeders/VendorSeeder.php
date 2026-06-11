<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    public function run(): void
    {
        $vendors = User::where('role', 'vendor')->get();

        foreach ($vendors as $index => $user) {
            Vendor::create([
                'user_id' => $user->id,
                'shop_name' => "Shop " . ($index + 1),
                'description' => "Description for Shop " . ($index + 1),
                'status' => 'active',
            ]);
        }
    }
}