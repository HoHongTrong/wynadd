<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintucs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tieude');
          $table->string('tieudekhongdau');
          $table->text('tomtat');
          $table->longText('noidung');
          $table->string('Hinh');
          $table->integer('noibat')->default(1);
          $table->integer('soluotxem')->default(0);
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
        Schema::dropIfExists('tintucs');
    }
}
