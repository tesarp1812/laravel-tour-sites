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
        Schema::create('m_product_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('sub_name');
            $table->string('m_product_id');
            $table->integer('varians');
            $table->double('price', 15, 2);
            $table->text('path'); // Lokasi file foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_product_details');
    }
};
