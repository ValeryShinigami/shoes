<?php

namespace Database\Seeders;

use App\Models\tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = tag::create([
            "name" => '#marques',
        ]);

        $tag = tag::create([
            "name" => '#model',
        ]);

    }
}
