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
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->integer('id_tanggapan')->autoIncrement();
            $table->integer('id_pengaduan');
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduan')->onUpdate('cascade')->onDelete('cascade')->constrained();
            $table->date('tanggal_tanggapan');
            $table->longText('tanggapan');
            $table->integer('id_petugas');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onUpdate('cascade')->onDelete('cascade')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
