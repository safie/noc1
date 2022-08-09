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
        Schema::create('t_status_noc_log', function (Blueprint $table) {
            $table->id();
            $table->string('noc_id')->nullable();
            $table->date('tarikh')->nullable();
            $table->string('status_noc')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('css_class')->nullable();
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
        Schema::dropIfExists('t_status_noc_log');
    }
};
