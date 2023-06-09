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
        Schema::create('Bills', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger("status");
            $table->bigInteger("pro_id")->unsigned();
            // $table->string("maker");
            $table->bigInteger("quantity");
            $table->bigInteger("price");
            $table->foreign('pro_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
