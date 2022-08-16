<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedigreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedigrees', function (Blueprint $table) {
            $table->id('register_num');
            $table->string('name')->nullable();
            $table->string('birth')->nullable();
            $table->string('tatto')->nullable();
            $table->string('gender')->nullable();
            $table->string('des')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pedigrees');
    }
}
