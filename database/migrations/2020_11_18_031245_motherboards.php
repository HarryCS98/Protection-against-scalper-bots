<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Motherboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Motherboards', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Product_Name');
            $table->string('Socket');
            $table->integer('Generation');
            $table->integer('Amount_USB');
            $table->integer('RAM_Slots');
            $table->integer('PCIE_Lanes');
            $table->string('PCIE_Generation');
            $table->boolean('WIFI');
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
        Schema::dropIfExists('Motherboards');
    }
}
