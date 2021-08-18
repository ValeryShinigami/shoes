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
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "a.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "b",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",

            "photoPrincipal" => "b.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "c",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "c.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "d",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "d.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "e",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "e.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "f",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "f.jpeg",
            "marque_id" => "1"
        ]);

        $produits = produits::create([
            "name" => "g",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "g.jpeg",
            "marque_id" => "3"
        ]);

        $produits = produits::create([
            "name" => "i",
            "prixHT" => "400",
            "description" => "sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "i.jpeg",
            "marque_id" => "5"
        ]);

        $produits = produits::create([
            "name" => "ferrari",
            "prixHT" => "400",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "ferrari.jpeg",
            "marque_id" => "4"
        ]);

                //REEBOK
        $produits = produits::create([
            "name" => "Legacy blue",
            "prixHT" => "200",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Legacy blue.jpeg",
            "marque_id" => "2"
        ]);

        $produits = produits::create([
            "name" => "Classic",
            "prixHT" => "200",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Classic.jpeg",
            "marque_id" => "2"
        ]);

        $produits = produits::create([
            "name" => "Legacy AZ",
            "prixHT" => "200",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Legacy AZ.jpeg",
            "marque_id" => "2"
        ]);

        $produits = produits::create([
            "name" => "Floatride",
            "prixHT" => "200",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Floatride.jpeg",
            "marque_id" => "2"
        ]);

        $produits = produits::create([
            "name" => "Kamikaze",
            "prixHT" => "200",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Kamikaze.jpeg",
            "marque_id" => "2"
        ]);

        $produits = produits::create([
            "name" => "Nano",
            "prixHT" => "200",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Nano.jpeg",
            "marque_id" => "2"
        ]);

        $produits = produits::create([
            "name" => "NanoX1",
            "prixHT" => "200",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "NanoX1.jpeg",
            "marque_id" => "2"
        ]);

        $produits = produits::create([
            "name" => "Iverson",
            "prixHT" => "500",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Iverson.jpeg",
            "marque_id" => "2"
        ]);
                //ADDIDAS
        $produits = produits::create([
            "name" => "Ultra boost",
            "prixHT" => "500",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "Ultra boost.jpeg",
            "marque_id" => "3"
        ]);

        $produits = produits::create([
            "name" => "ZX 2K Boost",
            "prixHT" => "500",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "ZX 2K Boost.jpeg",
            "marque_id" => "3"
        ]);

        $produits = produits::create([
            "name" => "ZX fury",
            "prixHT" => "500",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "ZX fury.jpeg",
            "marque_id" => "3"
        ]);

        $produits = produits::create([
            "name" => "low city",
            "prixHT" => "500",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "low city.jpeg",
            "marque_id" => "3"
        ]);

        $produits = produits::create([
            "name" => "stan smith",
            "prixHT" => "500",
            "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
            "photoPrincipal" => "stan smith.jpeg",
            "marque_id" => "3"
        ]);

                //PUMA
                $produits = produits::create([
                    "name" => "spider",
                    "prixHT" => "350",
                    "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
                    "photoPrincipal" => "spider.jpeg",
                    "marque_id" => "4"
                ]);
                $produits = produits::create([
                    "name" => "fierce",
                    "prixHT" => "350",
                    "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
                    "photoPrincipal" => "fierce.jpeg",
                    "marque_id" => "4"
                ]);
                $produits = produits::create([
                    "name" => "ideas",
                    "prixHT" => "350",
                    "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
                    "photoPrincipal" => "ideas.jpeg",
                    "marque_id" => "4"
                ]);
                $produits = produits::create([
                    "name" => "ideas2",
                    "prixHT" => "350",
                    "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
                    "photoPrincipal" => "ideas2.jpeg",
                    "marque_id" => "4"
                ]);
                $produits = produits::create([
                    "name" => "disc",
                    "prixHT" => "350",
                    "description" => "Sneaker qui revisite de manière innovante et audacieuse les fonctionnalités que vous aimez: durabilité, confort et style",
                    "photoPrincipal" => "disc.jpeg",
                    "marque_id" => "4"
                ]);
                //BALENCIAGA
    }
}
