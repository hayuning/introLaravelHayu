<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('jawaban_id');
            $table->longText('isi');
            $table->date('tgl_dibuat');
            $table->date('tgl_diperbarui');
            $table->foreign('tanya_id')->references('tanya_id')->on('pertanyaan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('profil_id')->references('profil_id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::table('jawaban', function($table) {
            $table->dropForeign(['tanya_id', 'profil_id']);
        });
        Schema::dropIfExists('jawaban');
    }
}
