<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //rescatar los productos cuya subcategoria tenga el color en true el tamaño en true
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
                    ->where('size', true);
        })->get();

        $sizes = ['Tallas S', 'Tallas M', 'Tallas L'];

        //para cada uno de estos productos se le va asiganar la talla S L M
        foreach ($products as $product) {

            foreach ($sizes as $size) {
                $product->sizes()->create([
                    'name' => $size
                ]);
            }

        }
    }
}
