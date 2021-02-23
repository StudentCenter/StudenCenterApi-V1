<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Extracurricular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracurricular', function (Blueprint $table) {
            $table->id();
            $table->string("nama_extracurricular");
            $table->string("pelatih");
            $table->string("jadwal");
            $table->string("jam");
            $table->string("jml_anggota");
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
        Schema::dropIfExists('extracurricular');
    }
}
