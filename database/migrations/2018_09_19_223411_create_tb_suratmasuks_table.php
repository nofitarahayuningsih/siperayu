<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSuratmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_suratmasuks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat_masuk');
            $table->integer('no_agenda');
            $table->date('Y/m/d');
            $table->string('asal');
            $table->string('perihal');
            $table->string('tujuan');
            $table->text('detail_surat');
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
        Schema::dropIfExists('tb_suratmasuks');
    }
}
