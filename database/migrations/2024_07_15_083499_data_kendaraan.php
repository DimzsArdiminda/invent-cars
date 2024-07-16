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
        Schema::create('data_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan');
            $table->string('plat_nomor');
            $table->enum('jenis_kendaraan', ['1', '0'])->comment('1 = angkut orang, 0 = angkut barang');
            $table->enum('kepemilikan', ['1', '0'])->comment('1 = milik sendiri, 0 = sewa');
            $table->enum('status', ['1', '0'])->comment('1 = available, 0 = not available');
            $table->date('jadwal_servis');
            $table->string('riwayat_pemakaian_kendaraan');
            $table->string('konsumsi_BBM');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kendaraan');
    }
};
