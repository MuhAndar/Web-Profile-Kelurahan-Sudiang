<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRingkasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ringkasan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nama');
            $table->text('isi');
            $table->text('bwu');
            $table->text('bws');
            $table->text('bwt');
            $table->text('bwb');
            $table->text('gambar');
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
        Schema::dropIfExists('table_ringkasan');
    }
}
