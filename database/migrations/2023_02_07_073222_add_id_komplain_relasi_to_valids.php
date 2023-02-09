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
        Schema::table('valids', function (Blueprint $table) {
            $table->unsignedBigInteger('id_komp')->after('id');
        });

        Schema::table('valids', function (Blueprint $table) {
            $table->foreign('id_komp')
                  ->references('id')
                  ->on('komplains')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valids', function (Blueprint $table) {
            //
        });
    }
};
