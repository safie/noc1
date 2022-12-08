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
        Schema::table('t_noc', function (Blueprint $table) {
            $table->integer('kos_sebelum')->nullable()->after('kos_projek');
            $table->integer('kos_perubahan')->nullable()->after('kos_sebelum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_noc', function (Blueprint $table) {
            $table->dropColumn('kos_sebelum');
            $table->dropColumn('kos_perubahan');
        });
    }
};
