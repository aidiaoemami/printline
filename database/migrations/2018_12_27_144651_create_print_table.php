<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_toko')->unsigned();
            $table->enum('jenis_cetak', ['warna', 'bw']);
            $table->enum('ink_coverage', ['full', 'medium', 'low']);
            $table->string('ukuran');
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
        Schema::dropIfExists('print');
    }
}
