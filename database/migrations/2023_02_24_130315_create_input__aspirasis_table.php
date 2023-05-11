<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputAspirasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input__aspirasis', function (Blueprint $table) {
            $table->id('id_pelaporan');
            $table->integer('nis');
            $table->integer('id_kategori');
            $table->string('lokasi', 50);
            $table->string('bukti');
            $table->string('ket', 50);
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
        Schema::dropIfExists('input__aspirasis');
    }
}