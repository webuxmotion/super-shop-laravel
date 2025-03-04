<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Підставки', 'Годинники', 'Світильники'];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category,
                'alias' => Str::slug($category, '-'),
                'keywords' => '',
                'description' => ''
            ]);
        }

        $categoriesDb = Category::all();

        $subCategories = [
            ['Підставки для телефонів', 'Підставки для планшетів']
        ];

        foreach ($subCategories as $key => $subCategory) {
            if ($categoriesDb[$key]) {

                foreach ($subCategory as $item) {
                    Category::create([
                        'parent_id' => $categoriesDb[$key]->id,
                        'title' => $item,
                        'alias' => Str::slug($item, '-'),
                        'keywords' => '',
                        'description' => ''
                    ]);
                }
            }
        }
    }
}
