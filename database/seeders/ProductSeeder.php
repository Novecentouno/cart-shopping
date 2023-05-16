<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Formaggio',
                'price' => 2.50,
            ],
            [
                'name' => 'Insalata',
                'price' => 1.5,
            ],
            [
                'name' => 'Acqua',
                'price' => 0.50,
            ],
            [
                'name' => 'Biscotti',
                'price' => 2.90,
            ]
        ];
        Product::insert($products);
    }
}
