<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'A high-performance laptop',
            'price' => 1200.99,
            'quantity' => 10,
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'A latest-gen smartphone',
            'price' => 799.99,
            'quantity' => 15,
        ]);

        Product::create([
            'name' => 'Headphones',
            'description' => 'Noise-canceling headphones',
            'price' => 199.99,
            'quantity' => 25,
        ]);
    }
}
