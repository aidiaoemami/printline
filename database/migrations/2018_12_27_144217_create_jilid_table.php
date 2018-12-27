<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJilidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jilid', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_toko')->unsigned();
            $table->enum('warna', ['bening', 'biru', 'kuning', 'hijau', 'merah', 'mix']);
            $table->double('harga');
            $table->timestamps();

            $table->foreign('id_toko')->references('id')->on('toko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jilid');
    }
}
