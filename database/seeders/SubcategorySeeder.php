<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Mujeres*/
            [
                'category_id' => 1,
                'name' => 'Casacas',
                'slug' => Str::slug('Casacas'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Polos',
                'slug' => Str::slug('Polos')
            ],
            [
                'category_id' => 1,
                'name' => 'Chompas',
                'slug' => Str::slug('Chompas')
            ],
            [
                'category_id' => 1,
                'name' => 'Poleras',
                'slug' => Str::slug('Poleras')
            ],
            [
                'category_id' => 1,
                'name' => 'Yoggers y buzos',
                'slug' => Str::slug('Yoggers y buzos')
            ],
            [
                'category_id' => 1,
                'name' => 'Jean',
                'slug' => Str::slug('Jean')
            ],
            [
                'category_id' => 1,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones')
            ],
            [
                'category_id' => 1,
                'name' => 'Blusas',
                'slug' => Str::slug('Blusas')
            ],
            [
                'category_id' => 1,
                'name' => 'Chalecos',
                'slug' => Str::slug('Chalecos')
            ],
            [
                'category_id' => 1,
                'name' => 'Vestidos',
                'slug' => Str::slug('Vestidos')
            ],
            [
                'category_id' => 1,
                'name' => 'Shorts',
                'slug' => Str::slug('Shorts')
            ],
            [
                'category_id' => 1,
                'name' => 'Overol y enterisos',
                'slug' => Str::slug('Overol y enterisos')
            ],
            [
                'category_id' => 1,
                'name' => 'Faldas',
                'slug' => Str::slug('Faldas')
            ],
            [
                'category_id' => 1,
                'name' => 'Abrigos y blazer',
                'slug' => Str::slug('Abrigos y blazer')
            ],

            /* Hombres*/
            [
                'category_id' => 2,
                'name' => 'Casacas',
                'slug' => Str::slug('Casacas'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Polos',
                'slug' => Str::slug('Polos')
            ],
            [
                'category_id' => 2,
                'name' => 'Chompas',
                'slug' => Str::slug('Chompas')
            ],
            [
                'category_id' => 2,
                'name' => 'Poleras',
                'slug' => Str::slug('Poleras')
            ],
            [
                'category_id' => 2,
                'name' => 'Yoggers y buzos',
                'slug' => Str::slug('Yoggers y buzos')
            ],
            [
                'category_id' => 2,
                'name' => 'Jean',
                'slug' => Str::slug('Jean')
            ],
            [
                'category_id' => 2,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones')
            ],
            [
                'category_id' => 2,
                'name' => 'Chalecos',
                'slug' => Str::slug('Chalecos')
            ],
            [
                'category_id' => 2,
                'name' => 'Bermudas',
                'slug' => Str::slug('Shorts')
            ],
            [
                'category_id' => 2,
                'name' => 'Overol y enterisos',
                'slug' => Str::slug('Overol y enterisos')
            ],
            [
                'category_id' => 2,
                'name' => 'Abrigos y blazer',
                'slug' => Str::slug('Abrigos y blazer')
            ],


            /* Niños*/
            [
                'category_id' => 3,
                'name' => 'Casacas',
                'slug' => Str::slug('Casacas'),
                'color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Polos',
                'slug' => Str::slug('Polos')
            ],
            [
                'category_id' => 3,
                'name' => 'Chompas',
                'slug' => Str::slug('Chompas')
            ],
            [
                'category_id' => 3,
                'name' => 'Poleras',
                'slug' => Str::slug('Poleras')
            ],
            [
                'category_id' => 3,
                'name' => 'Yoggers y buzos',
                'slug' => Str::slug('Yoggers y buzos')
            ],
            [
                'category_id' => 3,
                'name' => 'Jean',
                'slug' => Str::slug('Jean')
            ],
            [
                'category_id' => 3,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones')
            ],
            [
                'category_id' => 3,
                'name' => 'Chalecos',
                'slug' => Str::slug('Chalecos')
            ],
            [
                'category_id' => 3,
                'name' => 'Bermudas',
                'slug' => Str::slug('Shorts')
            ],
            [
                'category_id' => 3,
                'name' => 'Overol y enterisos',
                'slug' => Str::slug('Overol y enterisos')
            ],
            [
                'category_id' => 3,
                'name' => 'Abrigos y blazer',
                'slug' => Str::slug('Abrigos y blazer')
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
