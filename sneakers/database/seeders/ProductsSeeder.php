<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //création de produit de démonstration
        $product = Product::create([
            "name" => "jordan",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "jordan.jpeg"
        ]);

        $product = Product::create([
            "name" => "nike",
            "prixHT" => "300",
            "description" => "jolie paire de Nike",
            "photoPrincipal" => "nike.jpeg"
        ]);

        $product = Product::create([
            "name" => "Nike2",
            "prixHT" => "150",
            "description" => "jolie paire de nike2",
            "photoPrincipal" => "nike2.jpeg"
        ]);
    }
}

