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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //$table->timestamps('order_date');
            $table->timestamps();
            $table->unsignedBigInteger('shipment_id');
            $table->foreign('shipment_id')
                ->references('id')
                ->on('shipments')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')
                ->references('id')
                ->on('payments')
                ->onDelete('cascade');
            $table->integer('total_price');
            $table->string('status');
            $table->integer('order_weight');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
