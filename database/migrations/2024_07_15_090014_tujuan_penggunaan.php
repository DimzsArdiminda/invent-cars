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
        Schema::create('TujuanPenggunanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kendaraan')->nullable()->constrained('data_kendaraan');
            $table->foreignId('id_user')->nullable()->constrained('detail_user');
            $table->string('tujuan_penggunaan');
            $table->date('tanggal_penggunaan');
            $table->date('tanggal_pengembalian');
            $table->string('catatan')->nullable();
            $table->string('mileage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('=TujuanPenggunanan');
    }
};
