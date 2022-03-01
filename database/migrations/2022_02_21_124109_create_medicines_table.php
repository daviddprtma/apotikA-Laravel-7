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
            $table->string('name');
            $table->string('form');
            $table->string('formula')->nullable();
            $table->double('price',12,2);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->boolean('faskes1')->default(0);
            $table->boolean('faskes2')->default(0);
            $table->boolean('faskes3')->default(0);
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
        Schema::dropIfExists('medicines');
    }
}
