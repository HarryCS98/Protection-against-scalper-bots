<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GPU extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GPU', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Product_Name');
            $table->string('Edition');
            $table->integer('VRAM');
            $table->integer('Clock_Speed');
            $table->integer('Memory_Speed');
            $table->integer('Cuda_Cores');
            $table->integer('Price');
            $table->string('Memory_Type');
            $table->string('Process_Node');
            $table->boolean('Raytracing');
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
        Schema::dropIfExists('GPU');
    }
}
