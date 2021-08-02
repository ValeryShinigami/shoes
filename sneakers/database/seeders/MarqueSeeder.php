<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marque;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //on instancie des objets de types marques pour en creer par defaut
    {
        //
        $marque = Marque::create([
            'name' => 'Nike',
            'isOnline' => '1'
        ]);

        $marque = Marque::create([
            'name' => 'Reebok',
            'isOnline' => '1'
        ]);

        $marque = Marque::create([
            'name' => 'Adidas',
            'isOnline' => '1'
        ]);

        $marque = Marque::create([
            'name' => 'Puma',
            'isOnline' => '1'
        ]);

        $marque = Marque::create([
            'name' => 'Balenciago',
            'isOnline' => '1'
        ]);
    }
}
