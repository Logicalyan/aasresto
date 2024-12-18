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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('menu_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('subtotal'); // Harga per item

            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Relasi dengan tabel orders
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade'); // Relasi dengan tabel menus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
