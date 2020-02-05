<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStarwars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starwars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('height');
            $table->string('birth_year');
            $table->string('homeworld');
            $table->integer('numfilms');
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
        Schema::dropIfExists('starwars');
    }
}
