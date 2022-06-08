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
        Schema::create('t_noc', function (Blueprint $table) {
            $table->id();
            $table->string('tajuk_permohonan')->nullable();
            $table->date('tarikh_permohonan')->nullable();
            $table->date('tarikh_surat_kementerian')->nullable();
            $table->string('no_rujukan')->nullable();
            $table->string('kod_myprojek')->nullable();
            $table->string('kementerian')->nullable();
            $table->string('bahagian')->nullable();
            $table->dateTime('tarikh_submit')->nullable();
            $table->string('status_semak')->nullable();
            $table->dateTime('tarikh_semak')->nullable();
            $table->dateTime('tarikh_mohon_ulasan')->nullable();
            $table->dateTime('tarikh_sedia_ulasan')->nullable();
            $table->dateTime('tarikh_hantar_ulasan')->nullable();
            $table->dateTime('tarikh_sedia_memo_kelulusan')->nullable();
            $table->dateTime('tarikh_hantar_memo_kelulusan')->nullable();
            $table->dateTime('tarikh_kelulusan_pt')->nullable();
            $table->dateTime('tarikh_sedia_surat')->nullable();
            $table->dateTime('tarikh_hantar_surat_lulus')->nullable();
            $table->dateTime('tarikh_mohon_modul')->nullable();
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
        Schema::dropIfExists('t_noc');
    }
};
