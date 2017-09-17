<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaitinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitins', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idtheloai')->unsigned();
          $table->foreign('idtheloai')->references('id')->on('theloais');
          $table->string('ten');
          $table->string('tenkhongdau');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaitins');
    }
}
