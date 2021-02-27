<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHomeSlogan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_home_slogan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text1');
            $table->text('gambar1');
            $table->text('text2');
            $table->text('gambar2');
            $table->text('text3');
            $table->text('gambar3');
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
        Schema::dropIfExists('table_home_slogan');
    }
}