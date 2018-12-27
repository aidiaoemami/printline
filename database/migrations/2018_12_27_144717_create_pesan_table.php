<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_print')->unsigned();
            $table->integer('id_jilid')->unsigned();
            $table->text('file');
            $table->dateTime('tgl_pesan');
            $table->dateTime('tgl_ambil');
            $table->double('total');
            $table->text('note');
            $table->enum('status', ['belum', 'selesai']);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_print')->references('id')->on('print');
            $table->foreign('id_jilid')->references('id')->on('jilid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan');
    }
}
