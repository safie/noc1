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
            $table->string('ulasan_bajet')->nullable()->after('tarikh_sedia_ulasan_tek');
            $table->string('ulasan_teknikal')->nullable()->after('ulasan_bajet');
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
            $table->dropColumn('ulasan_bajet');
            $table->dropColumn('ulasan_teknikal');
        });
    }
};
