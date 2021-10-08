<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keyboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Keyboards', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Product_Name');
            $table->boolean('Mechanical');
            $table->string('Switch_Type');
            $table->boolean('Wireless');
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
        Schema::dropIfExists('Keyboards');
    }
}
