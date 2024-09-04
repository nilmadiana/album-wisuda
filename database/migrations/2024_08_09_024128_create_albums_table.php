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
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('cover');
            $table->string('file');
            $table->string('tahun');
            $table->string('undangan');
            $table->string('total');
            $table->string('s1_pai');
            $table->string('s1_mpi');
            $table->string('s1_pgmi');
            $table->string('s2_pai');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
