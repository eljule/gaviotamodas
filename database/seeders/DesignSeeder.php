<?php

namespace Database\Seeders;

use App\Models\Design;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designs = [
            //banner
            [
                'name' => 'Banner principal',
                'estado' => '1'
            ],
            [
                'name' => 'Banner secundario',
                'estado' => '1'
            ]
        ];

        foreach($designs as $design){
            $design = Design::create($design);

            $products = Product::factory(6)->create()->each(function(Product $product){  //each recorre cada uno de los productos como un foreach
                Image::factory(1)->create([
                    'imageable_id' => $product->id,
                    'imageable_type' => Product::class,
                ]);
            });

            foreach($products as $product){
                $product->designs()->attach($design->id);
            }
        }
    }
}
