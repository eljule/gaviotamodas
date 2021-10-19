<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Brand;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Moda mujer',
                'slug' => Str::slug('Moda mujer'),
                'icon' => '<i class="fas fa-female"></i>'
            ],
            [
                'name' => 'Moda hombre',
                'slug' => Str::slug('Moda hombre'),
                'icon' => '<i class="fas fa-male"></i>'
            ],
            [
                'name' => 'Moda niños',
                'slug' => Str::slug('Moda niños'),
                'icon' => '<i class="fas fa-child"></i>'
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
