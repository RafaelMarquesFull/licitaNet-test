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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('code_product')->primary();
            $table->string('name', 255);
            $table->float('price');
            $table->string('slug',255);
            $table->integer('stock');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('code_city')->nullable();
            $table->unsignedInteger('code_brand')->nullable();
            $table->unsignedInteger('code_category')->nullable();
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
