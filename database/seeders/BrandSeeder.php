<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'title' => 'Inc256',
                'img' => 'brands/inc256.png'
            ],
            [
                'title' => 'Baseus',
                'img' => 'brands/baseus.png'
            ],
            [
                'title' => 'Hoco',
                'img' => 'brands/hoco.png'
            ]
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'title' => $brand['title'],
                'img' => $brand['img'],
                'alias' => Str::slug($brand['title'], '-'),
                'description' => ''
            ]);
        }
    }
}
