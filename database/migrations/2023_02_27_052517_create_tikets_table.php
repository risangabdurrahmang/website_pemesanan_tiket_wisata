<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id('id_pemesan');
            $table->string('nama');
            $table->bigInteger('nomer_identitas');
            $table->char('no_hp');
            $table->string('tempat_wisata');
            $table->date('tanggal_kunjungan');
            $table->integer('pengunjung_dewasa');
            $table->integer('pengunjung_anakanak');
            $table->integer('harga_tiket');
            $table->integer('total_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tikets');
    }
};
