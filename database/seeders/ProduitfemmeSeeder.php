<?php

namespace Database\Seeders;

use App\Models\produitfemme;
use Illuminate\Database\Seeder;

class ProduitfemmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //création de produit de démonstration
         $produitfemme = produitfemme::create([
            "name" => "fly",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "fly.jpeg",
            "marque_id" => "1"
        ]);
    }
}
