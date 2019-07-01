<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::crete('barang', function(Blueprint $table){
            $table->increments('id');
            $table->string('kode');
            $table->string('nama');
            $table->text('deskripsi');
            $table->integer('stok');
            $table->integer('harga');
            $table->integer('berat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExist('barang');
    }
}
