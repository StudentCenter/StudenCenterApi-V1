<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama");
            $table->integer("kelas");
            $table->integer("ekskul");
            $table->string("nisn");
            $table->date("ttl");
            $table->string("anak_ke");
            $table->string("agama");
            $table->string('alamat');
            $table->string('no_hp_siswa');
            $table->string('no_hp_ayah');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('no_hp_ibu');
            $table->string('nama_ibu');
            $table->string('foto_siswa');
            $table->string('pekerjaan_ibu');
            $table->string('no_hp_wali')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('alamat_wali')->nullable();
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
        //
    }
}
