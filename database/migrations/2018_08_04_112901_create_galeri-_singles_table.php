<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri_single', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filestore',100);
            $table->string('filepath',100);
            $table->integer('galeri_id')->unsigned();
            $table->timestamps();

            $table->foreign('galeri_id')->references('id')->on('galeri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri_single');
    }
}
