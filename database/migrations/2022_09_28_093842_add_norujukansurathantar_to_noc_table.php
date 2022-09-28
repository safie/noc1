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
            $table->string('no_rujukan_surat_kelulusan')->nullable()->after('klasifikasi');
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
            $table->dropColumn('no_rujukan_surat_kelulusan');
        });
    }
};
