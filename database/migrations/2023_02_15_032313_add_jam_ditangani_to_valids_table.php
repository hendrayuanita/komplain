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
            $table->time('jam_ditangani')->nullable()->after('tgl_ditangani');
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
            $table->dropColumn('jam_ditangani');
            
        });
    }
};
