<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 4,
                'brand_id' => 1,
                'title' => 'Підставка для телефону Inc256 Mountains Limit',
                'price' => 400,
                'old_price' => 450,
                'img' => 'products/inc256-mountains-limit.png',
                'hit' => 1,
                'content' => '',
                'keywords' => '',
                'description' => '',
            ]
        ];

        foreach ($products as $item) {
            $item['alias'] = Str::slug($item['title'], '-');

            Product::create($item);
        }
    }
}
