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
        Schema::create('valids', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_ditangani');
            $table->string('respon');
            $table->string('penyelesaian');
            $table->string('level');
            $table->string('tgl_selesai');
            $table->string('capaian');
            $table->string('petugas');
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
        Schema::dropIfExists('valids');

    }
};
