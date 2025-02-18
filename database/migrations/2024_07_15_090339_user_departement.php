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
        Schema::create('user_departement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable()->constrained('detail_user');
            $table->foreignId('id_departement')->nullable()->constrained('departement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_departement');
    }
};
