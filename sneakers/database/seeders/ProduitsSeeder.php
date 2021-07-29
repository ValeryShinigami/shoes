<?php

namespace Database\Seeders;

use App\Models\produits;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //création de produit de démonstration
         $produits = produits::create([
            "name" => "a",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "a.jpeg"
        ]);

        $produits = produits::create([
            "name" => "b",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "b.jpeg"
        ]);

        $produits = produits::create([
            "name" => "c",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "c.jpeg"
        ]);

        $produits = produits::create([
            "name" => "d",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "d.jpeg"
        ]);

        $produits = produits::create([
            "name" => "e",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "e.jpeg"
        ]);

        $produits = produits::create([
            "name" => "f",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "f.jpeg"
        ]);

        $produits = produits::create([
            "name" => "g",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "g.jpeg"
        ]);

        $produits = produits::create([
            "name" => "i",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "i.jpeg"
        ]);

        $produits = produits::create([
            "name" => "j",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "j.jpeg"
        ]);
    }
}
