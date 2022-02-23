<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryidmedicinesColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('medicines',function(Blueprint $table){
            $table -> unsignedBigInteger('category_id');
            $table -> foreign('category_id') -> references('id') -> on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //ini digunakan untuk menghapus foreign key medicine
        Schema::table('medicines',function(Blueprint $table){
            $table -> dropForeign(['category_id']);
            $table -> dropIfExists(['category_id']);
        });
    }
}
