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
        Schema::create('wisudawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('judul');
            $table->string('ipk');
            $table->enum('jurusan', [
                's1_pendidikan_agama_islam', 
                's1_manajemen_pendidikan_agama_islam', 
                's1_pendidikan_guru_madrasah_ibtidaiyah', 
                's2_pendidikan_agama_islam'
            ]);
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisudawans');
    }
};
