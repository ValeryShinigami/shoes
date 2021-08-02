<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //quand on fait php artisan migrate la fonction up est lançée
    {
        Schema::create('marques', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('isOnline')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marques');
    }
}
