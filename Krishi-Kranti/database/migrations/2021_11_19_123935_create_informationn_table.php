<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informationn', function (Blueprint $table) {
        $table->id('informationn_id');
        $table->string('sibling')->nullable();
        $table->string('owner')->nullable();
        $table->string('origine')->nullable();
        $table->string('breeder')->nullable();
        $table->string('vaccineted')->nullable();
        $table->string('vaccineteddate')->nullable();
        
        $table->string('child_image')->nullable();

        $table->foreign('register_num')->references('register_num')->on('pedigrees');
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
        Schema::dropIfExists('informationn');
    }
}
