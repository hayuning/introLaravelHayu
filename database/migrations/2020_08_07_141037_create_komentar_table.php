<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->bigIncrements('komentar_id');
            $table->longText('isi');
            $table->date('tgl_dibuat');
            $table->date('tgl_diperbarui');
            $table->foreign('tanya_id')->references('tanya_id')->on('pertanyaan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jawaban_id')->references('jawaban_id')->on('jawaban')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::table('komentar', function($table) {
            $table->dropForeign(['tanya_id', 'jawaban_id']);
        });
        Schema::dropIfExists('komentar');
    }
}
