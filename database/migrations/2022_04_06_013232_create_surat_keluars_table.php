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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('kode_pengarsipan_id');
            // $table->text('perihal')->require();
            // $table->string('kode')->require();
            $table->integer('no_urut')->require();
            $table->integer('box')->nullable();
            $table->text('isi_ringkas')->require();
            $table->string('dari_kepada')->require();
            $table->string('pengolah')->require();
            $table->date('tanggal_surat')->nullable();
            $table->integer('lampiran');
            $table->text('catatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keluars');
    }
};
