<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->foreignId('cabang_id')->nullable();
            $table->foreignId('ruangan_id')->nullable();
            $table->foreignId('vendor_id')->nullable();
            $table->foreignId('kelompok_barang_id')->nullable();
            $table->float('harga')->nullable();
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->char('nomor_seri')->nullable();
            $table->string('tahun')->nullable();
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
        Schema::dropIfExists('barang');
    }
}
