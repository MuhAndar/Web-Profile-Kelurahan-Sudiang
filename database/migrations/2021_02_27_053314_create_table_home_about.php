<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHomeAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_home_about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text1');
            $table->text('text2');
            $table->text('text3');
            $table->text('text4');
            $table->text('text5');
            $table->text('text6');
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
        Schema::dropIfExists('table_home_about');
    }
}
