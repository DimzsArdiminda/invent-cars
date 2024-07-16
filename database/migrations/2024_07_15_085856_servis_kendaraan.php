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
        Schema::create('servis_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kendaraan')->nullable()->constrained('data_kendaraan');
            $table->foreignId('id_user')->nullable()->constrained('detail_user');
            $table->date('tanggal_servis');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servis_kendaraan');
    }
};
