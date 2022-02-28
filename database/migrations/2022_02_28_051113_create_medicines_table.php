<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('form');
            $table->string('formula');
            $table->string('description', 3000);
            $table->string('faskes_1');
            $table->string('faskes_2');
            $table->string('faskes_3');
            $table->integer('price');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
