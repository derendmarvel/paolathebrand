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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('warna');
            $table->string('size');
            $table->integer('harga');
            $table->string('foto')->nullable(true);
            $table->string('deskripsi');
            $table->integer('stok');
            $table->text('link');
            $table->unsignedBigInteger('kategori_id')->nullable(true);
            $table->foreign('kategori_id')
                ->references('id')
                ->on('kategoris')
                ->onDelete('cascade');
            $table->unsignedBigInteger('promo_id')->nullable(true);
            $table->foreign('promo_id')
                ->references('id')
                ->on('promos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
