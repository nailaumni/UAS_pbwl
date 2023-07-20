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
        Schema::create('tb_roti', function (Blueprint $table) {
            $table->increments('roti_id');
            $table->string('roti_kode');
            $table->string('roti_nama');
            $table->string('roti_jk');
            $table->string('roti_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_guru');
    }
};
