<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeskripsiPricingposTable extends Migration
{
    public function up()
    {
        Schema::create('deskripsi_pricingpos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pricing_pos_id');
            $table->foreign('pricing_pos_id')->references('id')->on('pricing_pos')->onDelete('cascade');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deskripsi_pricingpos');
    }
}