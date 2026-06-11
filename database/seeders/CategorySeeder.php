<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $electronics = Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
        ]);

        Category::create([
            'name' => 'Phones',
            'slug' => 'phones',
            'parent_id' => $electronics->id,
        ]);

        Category::create([
            'name' => 'Laptops',
            'slug' => 'laptops',
            'parent_id' => $electronics->id,
        ]);

        Category::create([
            'name' => 'Accessories',
            'slug' => 'accessories',
            'parent_id' => $electronics->id,
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
            'parent_id' => $electronics->id,
        ]);
    }
}