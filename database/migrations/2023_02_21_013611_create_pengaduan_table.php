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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->integer('id_pengaduan')->autoIncrement();
            $table->date('tanggal_pengaduan');
            $table->char('nik');
            $table->foreign('nik')->references('nik')->on('masyarakat')->onUpdate('cascade')->onDelete('cascade')->constrained();
            $table->longText('isi_laporan');
            $table->string('foto')->nullable();
            $table->enum('status', ['0', 'proses', 'selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
