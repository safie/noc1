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
            $table->dateTime('tarikh_semak_bajet')->nullable()->after('tarikh_semak');
            $table->dateTime('tarikh_semak_tek')->nullable()->after('tarikh_semak_bajet');
            $table->dateTime('tarikh_dokumen_tambahan')->nullable()->after('tarikh_semak_tek');
            $table->dateTime('tarikh_mohon_ulasan_tek')->nullable()->after('tarikh_mohon_ulasan');
            $table->dateTime('tarikh_dokumen_tambahan_bajet')->nullable()->after('tarikh_dokumen_tambahan');
            $table->dateTime('tarikh_dokumen_tambahan_tek')->nullable()->after('tarikh_dokumen_tambahan_bajet');
            $table->dateTime('tarikh_sedia_ulasan_tek')->nullable()->after('tarikh_sedia_ulasan');
            $table->dateTime('tarikh_hantar_ulasan_tek')->nullable()->after('tarikh_hantar_ulasan');
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
            $table->dropColumn('tarikh_dokumen_tambahan');
            $table->dropColumn('tarikh_mohon_ulasan_tek');
            $table->dropColumn('tarikh_semak_bajet');
            $table->dropColumn('tarikh_semak_tek');
            $table->dropColumn('tarikh_dokumen_tambahan_bajet');
            $table->dropColumn('tarikh_dokumen_tambahan_tek');
            $table->dropColumn('tarikh_sedia_ulasan_tek');
            $table->dropColumn('tarikh_hantar_ulasan_tek');
        });
    }
};
