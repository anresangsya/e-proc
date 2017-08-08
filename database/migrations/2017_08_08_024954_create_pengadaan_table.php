<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengadaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_spk');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->string('nama_supplier');
            $table->string('keperluan');
            $table->date('tanggal');
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
        Schema::dropIfExists('pengadaan');
    }
}
