<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WatercoolingFittings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WatercoolingFittings', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Product_Name');
            $table->string('type');
            $table->string('Size');
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
        Schema::dropIfExists('WatercoolingFittings');
    }
}
