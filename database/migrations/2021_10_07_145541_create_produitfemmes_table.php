<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitfemmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produitfemmes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('prixHT');
            $table->string('photoPrincipal');
            $table->timestamps();
            $table->unsignedBigInteger('marque_id');//pour lier les marques au produitfemme
            $table->foreign('marque_id')->references('id')->on('marques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produitfemmes');
    }
}
