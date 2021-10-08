<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HardDrive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HardDrive', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Product_Name');
            $table->integer('Storage');
            $table->integer('Speed');
            $table->integer('Interface_Speed');
            $table->integer('Size');
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
        Schema::dropIfExists('Harddrives');
    }
}
