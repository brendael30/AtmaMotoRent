<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('id_motor');
            $table->foreign('id_motor')->references('id')->on('motors');
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->double('total_harga');
            $table->unsignedinteger('fk');
            $table->foreign('fk')->references('id')->on('users');
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
        Schema::dropIfExists('transaksi_temps');
    }
}
