<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_pengarsipan_id');
            $table->integer('no_urut')->unique();
            $table->integer('box')->nullable();
            // $table->text('perihal')->nullable();
            $table->string('no_surat')->nullable();
            // $table->string('kode')->nullable();
            $table->text('isi_ringkas')->nullable();
            $table->string('dari_kepada')->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->integer('lampiran')->nullable();
            $table->string('pengolah')->nullable();
            $table->date('tanggal_diteruskan')->nullable();
            $table->string('tanda_diterima')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuks');
    }
};
