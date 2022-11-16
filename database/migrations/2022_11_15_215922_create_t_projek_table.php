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
        Schema::create('t_projek_rp2_2022', function (Blueprint $table) {
            $table->id();
            $table->string('id_kementerian');
            $table->text('nama_projek');
            $table->string('kod_projek');
            $table->bigInteger('kos_keseluruhan');
            $table->bigInteger('kos_de_asal');
            $table->bigInteger('kos_de_dipinda');
            $table->bigInteger('siling_asal_2022');
            $table->bigInteger('siling_dipinda_2022');
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
        Schema::dropIfExists('t_projek_rp2_2022');
    }
};
