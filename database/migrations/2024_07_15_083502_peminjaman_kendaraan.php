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
        Schema::create('data_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_approver')->nullable()->constrained('detail_user');
            $table->foreignId('id_user')->nullable()->constrained('detail_user');
            $table->foreignId('id_kendaraan')->nullable()->constrained('data_kendaraan');
            $table->string('driver');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->enum('status_peminjaman', ['1', '0'])->comment('1 = approved, 0 = not approved');
            $table->enum('status_pengembalian', ['1', '0'])->comment('1 = returned, 0 = not returned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_peminjaman');
    }
};
