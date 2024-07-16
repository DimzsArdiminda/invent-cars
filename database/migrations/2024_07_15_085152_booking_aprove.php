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
        Schema::create('persetujuan_booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->nullable()->constrained('data_peminjaman');
            $table->foreignId('approver_id')->nullable()->constrained('detail_user');
            $table->enum('level_status_persetujuan', ['2','1', '0'])->comment('2 = persetujuan lvl 2 , 1 = persetujuan lvl 1, 0 = belum di setujui');
            $table->string('catatan')->nullabel();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persetujuan_booking');
    }
};
