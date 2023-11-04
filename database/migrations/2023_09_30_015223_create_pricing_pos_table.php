<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricing_pos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pricingpos',100);
            // $table->decimal('harga_pricingpos', 5, 2)->nullable()->default(123.45);
            $table->bigInteger('harga_pricingpos');
            $table->string('deskripsi_pricingpos',1000);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_pos');
    }
};
