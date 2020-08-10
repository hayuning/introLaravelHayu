<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('tanya_id');
            $table->string('judul', 120);
            $table->longText('isi');
            $table->date('tgl_dibuat');
            $table->date('tgl_diperbarui');
            $table->integer('jawaban_terbaik_id');
            $table->integer('profil_id');
            $table->foreign('profil_id')->references('profil_id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jawaban_terbaik_id')->references('jawaban_id')->on('jawaban')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function($table) {
            $table->dropForeign(['profil_id'],['jawaban_terbaik_id']);
         });
        Schema::dropIfExists('pertanyaan');

    }
}
