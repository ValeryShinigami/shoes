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
            "photoPrincipal" => "a.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "b",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "b.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "c",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "c.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "d",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "d.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "e",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "e.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "f",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "f.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "g",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "g.jpeg",
            "marque_id" => "3"
        ]);

        $produits = produits::create([
            "name" => "i",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "i.jpeg",
            "marque_id" => "5"
        ]);

        $produits = produits::create([
            "name" => "j",
            "prixHT" => "400",
            "description" => "jolie paire de jordan",
            "photoPrincipal" => "j.jpeg",
            "marque_id" => "4"
        ]);
    }
}
