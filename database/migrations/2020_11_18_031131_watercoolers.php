<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Watercoolers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Watercoolers', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Product_Name');
            $table->string('Socket');
            $table->integer('Fan_Size');
            $table->integer('Amount_Fans');
            $table->integer('Radiator_Size');
            $table->integer('Price');
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
        Schema::dropIfExists('Watercoolers');
    }
}
