<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaSeminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_seminar', function (Blueprint $table) {
            $table->bigIncrements('id_seminar');
            $table->string('nama', 50);
            $table->string('alamat', 50);
            $table->integer('usia');
            $table->string('email', 50);
            $table->string('no_tlp', 15);
            $table->string('jenis_kelamin', 10);
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
        Schema::dropIfExists('peserta_seminar');
    }
}
