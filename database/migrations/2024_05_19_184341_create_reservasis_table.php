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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('villa_id');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->decimal('total_harga', 10, 2);
            $table->enum('metode_pembayaran', ['transfer', 'tunai']);
            $table->enum('payment_status', ['sudah_bayar', 'belum_bayar'])->default('belum_bayar');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('cascade');
            $table->foreign('villa_id')->references('id')->on('villas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
