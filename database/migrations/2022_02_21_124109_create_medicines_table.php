<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name',500);
            $table -> string('form',500);
            $table ->string('formula',500);
            $table -> string('description',500);
            $table -> bigInteger('price');
            $table -> boolean('faskes_1');
            $table -> boolean('faskes_2');
            $table -> boolean('faskes_3');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
