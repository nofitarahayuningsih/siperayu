<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSuratkeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_suratkeluars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat_keluar');
            $table->integer('no_agenda');
            $table->date('Y/m/d');
            $table->string('perihal');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('petugas');
            $table->string('file');
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
        Schema::dropIfExists('tb_suratkeluars');
    }
}
