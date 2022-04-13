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
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('no_urut')->require();
            $table->string('no_agenda')->nullable();
            $table->string('dari')->nullable();
            $table->string('no_surat')->nullable();
            $table->date('tanggal_disposisi')->nullable();
            $table->date('diterima_tanggal')->nullable();
            $table->text('perihal')->nullable();
            $table->integer('sifat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disposisis');
    }
};
