<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $vendors = Vendor::all();
        $category = Category::where('slug', 'phones')->first();

        foreach ($vendors as $vendorIndex => $vendor) {

            for ($i = 1; $i <= 5; $i++) {
                $title = "Product {$vendorIndex}-{$i}";

                Product::create([
                    'vendor_id' => $vendor->id,
                    'category_id' => $category->id,
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'description' => "Demo product {$i} from vendor {$vendor->id}",
                    'price' => rand(100, 2000),
                    'stock' => rand(5, 50),
                    'status' => 'active',
                ]);
            }
        }
    }
}