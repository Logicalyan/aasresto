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
        Schema::create('payments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('order_id');

                $table->decimal('amount_paid', 10, 2); // Jumlah uang yang dibayar
                $table->decimal('change_given', 10, 2)->nullable(); // Uang kembalian yang diberikan (untuk pembayaran tunai)
                $table->enum('payment_method', ['cash', 'transfer']); // Metode pembayaran (cash atau transfer)
                $table->timestamps();

                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Relasi dengan tabel orders

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
